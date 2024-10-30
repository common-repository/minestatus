<?php

class ApiClient
{

    private $api = 'https://miners.me/api/';
    private $host;
    private $port;

    /**
     * @param $host
     * @param int $port
     */
    public function __construct($host, $port = 25565)
    {
        // Setup host and port of minecraft server
        $this->host = $host;
        $this->port = $port;
    }

    /**
     * @return mixed
     */
    public function call()
    {
        if(function_exists('curl_version')) {
            $curl = curl_init();
            $endpoint = $this->api . 'status/?host=' . $this->host . '&port=' . $this->port;
            curl_setopt($curl, CURLOPT_URL, $endpoint);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec($curl);
            $data = json_decode($response, true);
            curl_close($curl);
            return $data;
        } else {
            return null;
        }
    }
}
