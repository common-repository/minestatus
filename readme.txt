=== Plugin Name ===
Contributors: j.weustink
Tags: minecraft,server,status,minequery,status,players,plugins,miners.me,rest,api,avatar,bukkit,craftbukkit,minestatus
Requires at least: 3.0
Tested up to: 4.6.1
Stable tag: 3.0.1

Minestatus is a WordPress Widget that enables you to show data from a <a href="https://minecraft.net/">Minecraft</a> server.

== Description ==

Minestatus is a WordPress Widget that enables you to show data from a <a href="https://minecraft.net/">Minecraft</a> server. It uses the <a href="http://miners.me">Miners.me</a> REST API to get server data.

Returned parameters are:
<ul>
	<li>Server status</li>
	<li>Server latency</li>
	<li>Server host</li>
	<li>Server ip</li>
	<li>Server port</li>
	<li>Server version</li>
	<li>Server protocol</li>
	<li>Maximum players</li>
	<li>Online players</li>
</ul>

<strong>On a personal note</strong><br>
My sincere apologies for the plugin not working, the last 2 years have been really busy. A lot has changed in minecraft land so some features are changed and new features will arrive later on. If you want to be a part of this plugin please let me know.

== Installation ==

1. Upload to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add the widget to your widgetized sections

== Screenshots ==

1. Widget settings
2. Status online
3. Status offline

== Changelog ==

= 3.0 =
- Created a new API for this plugin.
- Added and removed some server parameters.

= 2.1.3 =
- Added fix for empty players and/or plugins, thanks to <a href="http://wordpress.org/support/profile/dittiox">Dittiox</a>.

= 2.1.2 =
- Added extra checks for older PHP versions

= 2.1.1 =
- Created a fallback for when PHP is running in safe_mode.
- Switched to miners.me avatars because Minotar is to slow.

= 2.1 =
- Switched to miners.me REST API for better up time.
- Changed some options.
- Disabled MineQuery support.
- Support for multiple instances thanks to <a href="http://wordpress.org/support/profile/shadowdog007">ShadowDog007</a>

= 2.0.1 =
- Small player list bug fix.

= 2.0 =
- Now supports Minecraft Query and Minequery.
- Added extra parameters: server version, game type, map name, plugins.
- Completely new code structure

= 1.5.3 =
- Changed method to load external files

= 1.5.2 =
- Added a hydrate function to fix PHP notice issues, found by @Zilacon.

= 1.5.1 =
- Added support for 3.5.1
- Some changes in the description

= 1.5 =
- Added Minotar support
- Added new screenshots
- Improved and cleaned up a lot of unnecessary code
- Improved javascript
- Improved mineQuery class
- Removed show list option

= 1.4.1 =
- Show players bug fix, thanks to @FelFireBlog

= 1.4 =
- Placed html a separate views
- Created a class to get minequery data
- Added the option show players
- Some small layout changes

= 1.3.5 =
- Some minor changes

= 1.3.4 =
- Changed calculation for load time and output format to milliseconds.

= 1.3.3 =
- Fixed duplicate DOM element ID's wel toggling player-list.

= 1.3.2 =
- Removed fixed buffer size.
- Added screenshots.

= 1.3.1 =
- Small output fixes in widget().

= 1.3 =
- Added options "show server status" and "show server name".
- Some small tweaks.

= 1.2.1 =
- Code clean-up to make it more readable.

= 1.2 =
- Added on/off options for: load time, server port and playerlist.
- Fixed load time bug.

= 1.1 =
- Added a fix to check if the server is online. Before this fix the server returned a 500 "internal server" error..
- Switched to QUERY_JSON instead of QUERY for much easier handling of the reponse data.

= 1.0 =
- First release.
