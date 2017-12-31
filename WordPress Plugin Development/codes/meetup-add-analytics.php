<?php
/*
Plugin Name: Meetup Add Analytics
Plugin URI: http://www.whoisabhi.com
Description: Nagpur PHP meetup Jan 2010, WordPress Plugin to add analytics code
Author: Abhishek Deshpande
Version: 0.1
Author URI: http://www.whoisabhi.com/
*/

function Meetup_add_analytics(){
?>
	<script type="text/javascript">var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script><script type="text/javascript">try {var pageTracker = _gat._getTracker("UA-9104561-1");pageTracker._trackPageview();
	} catch(err) {}</script>
<?php
}
	add_action(wp_footer,Meetup_add_analytics);

?>