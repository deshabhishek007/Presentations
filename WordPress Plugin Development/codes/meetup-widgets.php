<?php
/*
Plugin Name: Widgets Nagpur PHP meetup 2010
Plugin URI: http://www.whoisabhi.com
Description: This is just a Custom Widget.  
Author: Abhishek Deshpande
Version: 0.1
Author URI: http://www.whoisabhi.com/
*/

/* Initializing Widget */
add_action('widgets_init', 'widget_ngp_init');

/* Defining Widget */
function widget_ngp() { ?>
	<li class="widget">
		<div class="my_widget_header">
		<h3>Your Custom Header</h3>
		</div>
		<div id="widget_content">
		<span style="color: #ff0000;">Put Your Content Here</span>
		</div>
	</li>	<?php
}

/* Defining Initialization Widget */
function widget_ngp_init() {

/* Registering Widget */
register_sidebar_widget('My Custom Widget', 'widget_ngp'); 
}

function Dashboard_widget() {
	echo 'Test Add Dashboard-Widget';
}
 
/**
 * add Dashboard Widget via function wp_add_dashboard_widget()
 */
function Dashboard_widget_setup() {
	wp_add_dashboard_widget( 'Dashboard_widget', __( 'Nagpur PHP Group, you have a widget on Dashboard' ), 'Dashboard_widget' );
}
 
/**
 * use hook, to integrate new widget
 */
add_action('wp_dashboard_setup', 'Dashboard_widget_setup');

?>
