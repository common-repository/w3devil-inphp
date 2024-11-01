<?php
/*
Plugin Name:inPHP
Plugin URI: http://www.example.com/org
Description:Insert PHP codes in your Blog as a widget instead of that normal text and HTML but with PHP. Even cURL works if supported by Host* (Inspired from Samsarim PHP widget - samsarin.com)
Author: Kranthi Kiran
Version:0.1.3
Author URI: http://www.example.com

*/
class inPHP extends WP_Widget {
function inPHP() {
$widget_ops = array('classname' => 'inphp', 'description' => 'Insert PHP codes in your Blog as a widget instead of that normal text and HTML but with PHP. Even cURL works if supported by Host*');
$control_ops = array('width' => 400, 'height' => 350);
$this->WP_Widget('inphp', 'inPHP', $widget_ops, $control_ops);
}
function widget($args, $instance) { 
extract($args);
$title = $instance['title'];
$body = apply_filters('widget_text', $instance['body']);
if (empty($body)) {
$body = '&nbsp;';
}
print $before_widget;
if (!empty($title)) {
print $before_title;
eval(" ?> $title <?php ");
print $after_title;
}
eval(" ?> $body <?php ");
print $after_widget;
}
function update($new_instance, $old_instance) { 
return $new_instance;
}
function form($instance) {  
$title = $instance['title'];
$body = $instance['body'];
$title_id = $this->get_field_id('title');
$title_name = $this->get_field_name('title');
$body_id = $this->get_field_id('body');
$body_name = $this->get_field_name('body');
?>
<p><label for="<?php echo $title_id; ?>">Title:</label><input class="widefat"id="<?php echo $title_id; ?>"name="<?php echo $title_name; ?>"type="text"value="<?php echo esc_attr($title); ?>"/></p><p><textarea class="widefat"id="<?php echo $body_id; ?>"name="<?php echo $body_name; ?>"rows="16"cols="20"><?php echo htmlspecialchars($body);?></textarea></p>
<?php 
}
}
add_action('widgets_init', create_function('', 'return register_widget("inPHP");'));
