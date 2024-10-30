<?php

require dirname(__FILE__) . '/libs/Widgetize.php';
require dirname(__FILE__) . '/libs/ApiClient.php';

class Minestatus_Widget extends Widgetize
{
    /**
     * Construct
     */
    public function __construct()
    {
        parent::__construct('Minestatus', array(
            'title' => 'Server status',
            'host' => 'server.yourserver.com',
            'port' => '25565',
            'show_status' => 'on',
            'show_latency' => 'on',
            'show_players_max' => 'on',
            'show_players_online' => 'on',
            'show_host' => 'on',
            'show_ip' => 'on',
            'show_port' => 'on',
            'show_version' => 'on',
            'show_protocol' => 'on',
        ));
    }

    /**
     * @param array $args
     * @param array $instance
     */
    public function widget(array $args, array $instance)
    {
        $instance = $this->hydrate($instance);

        // Get ip if localhost
        if (in_array($instance['host'], array('127.0.0.1', 'localhost'))) {
            $instance['host'] = $_SERVER['SERVER_ADDR'];
        }

        $client = new ApiClient($instance['host'], $instance['port']);
        $status = $client->call();

        require dirname(__FILE__) . '/templates/widget.phtml';
    }

    /**
     * @param array $instance
     * @return string|void
     */
    public function form(array $instance)
    {
        $instance = $this->hydrate($instance);
        require dirname(__FILE__) . '/templates/form.phtml';
    }

    /**
     * @param $newInstance
     * @param $oldInstance
     * @return array
     */
    public function update($newInstance, $oldInstance)
    {
        $instance = array();
        foreach ($newInstance as $option => $value) {

            if((int) $value > 0 && !in_array($option, array('host'))) {
                $value = (int) $value;
            }
            $instance[$option] = strip_tags(trim($value));
        }
        return $instance;
    }
}

Widgetize::add('Minestatus_Widget');