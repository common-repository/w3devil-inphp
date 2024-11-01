=== inPHP Widget ===
Contributors: Kranthi Kiran
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=9737306
Tags: Widget, php, Wordpress widget
Requires at least: 2.0.2
Tested up to: 2.8.6
Stable tag: 0.1.2
A plugin that adds that ability to insert any PHP code into a sidebar widget.

== Description ==
inPHP widget adds a new text widget that even allows PHP to be included! 
The text widget that comes with the default Wordpress installation doesn't allow 
you to include PHP code in its text Widget but this plugin adds a new widget called 'inPHP Widget', 
which will allow you to include PHP code, as well as plain text and HTML.

Features included:

* Add PHP code to both the widget title and the widget body.

_Warning: This widget provides great flexibility in customizing your sidebar.
 It achieves this by automatically evaluating any included PHP included in the title or the body of the widget.
 Care should be taken when including PHP code in the sidebar,
 as with anywhere else in the Wordpress system._
== Installation ==


    * Download the "inPHP" and unzip it.
    * Copy "inPHP.php" to the wp-content/plugins directory.
    * Login to Wp-admin and go to Plugins and enable "inPHP".

== Frequently Asked Questions ==

= What do I do if inPHP Widget does not show up in the widget admin console? =

First, make sure that the plugin is enabled.

1. Log in to the admin console
2. Go to Plugins
3. Verify that "inPHP Widget" is in the list. If it is not, then wordpress doesn't see the plugin. Is it in your plugin directory (wp-content/plugins)?
4. Verify that the plugin is enabled



== Usage ==

    * Login to Wp-Admin
    * Go to Appearance | Widgets.
    * Select and drag "inPHP" to your Sidebar list.
    * Click the down arrow to edit the widget.
    * When done editing, click Save.


You may enter PHP code both in the title and the body.

== Customization ==

If you want to customize it a little more using CSS. 
The class name is 'widget inphp'. 
With this you can customize it a little more.

== Changelog ==

* Some small bugs fixed
* Optimized code for faster loading