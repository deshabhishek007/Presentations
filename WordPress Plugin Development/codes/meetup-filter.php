<?php
/*
Plugin Name: Meetup Filter Text
Plugin URI: http://www.whoisabhi.com
Description: Nagpur PHP meetup Jan 2010, WordPress Plugin - Filter
Author: Abhishek Deshpande
Version: 0.1
Author URI: http://www.whoisabhi.com/
*/

function nagpur_php_meetup(){

$content = get_the_content();
$content = str_replace('WordPress', 'WORDPRESS', $content);
return $content;
}
add_filter('the_content', 'meetup_filter_text');


?>
