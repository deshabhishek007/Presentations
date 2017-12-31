<?php
/*
Plugin Name: Meetup Add Analytics Adv
Plugin URI: http://www.whoisabhi.com
Description: Nagpur PHP meetup Jan 2010, WordPress Plugin to add analytics code
Author: Abhishek Deshpande
Version: 0.1
Author URI: http://www.whoisabhi.com/
*/

function meetup_adv(){
	echo get_option("meetup_analytic_code");
}
add_action(wp_footer,meetup_adv);

// Hook for adding admin menus
add_action('admin_menu', 'meetup_add_pages');

// action function for above hook
function meetup_add_pages() {
    // Add a new submenu under Options:
    add_options_page('PHP MEETUP Analytics Options', 'Analytics Options', '6', 'Analytics-options', 'meetup_options_page');
}

// meetup_options_page() displays the page content for the Test Options submenu
function meetup_options_page() {
    // variables for the field and option names 
    $opt_name = 'meetup_analytic_code';
    $hidden_field_name = 'meetup_submit_hidden';
    $data_field_name = 'meetup_analytic_code';

    // Read in existing option value from database
    $opt_val = get_option( $opt_name );

    // See if the user has posted us some information
    // If they did, this hidden field will be set to 'Y'
    if( $_POST[ $hidden_field_name ] == 'Y' ) {
        // Read their posted value
        $opt_val = $_POST[ $data_field_name ];

        // Save the posted value in the database
        update_option( $opt_name, $opt_val );

        // Put an options updated message on the screen

?>
<div class="updated"><p><strong><?php _e('Options saved.', 'meetup_trans_domain' ); ?></strong></p></div>
<?php
    }
    // Now display the options editing screen
    echo '<div class="wrap">';
    // header
    echo "<h2>Happy New Year To All PHP Nagpur User Group !!</h2>";
	echo "<h2>" . __( 'Options', 'meetup_trans_domain' ) . "</h2>";

    // options form
    
    ?>

<form name="form1" method="post" action="">
<input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">

<p><?php _e("Analytics Code:", 'meetup_trans_domain' ); ?> 
<textarea name="<?php echo $data_field_name; ?>" value="<?php echo $opt_val; ?>"  rows="10" cols="60"></textarea>
</p>

<p class="submit">
<input type="submit" name="Submit" value="<?php _e('Update Options', 'meetup_trans_domain' ) ?>" />
</p>

</form>
</div>

<?php
 
}



?>

