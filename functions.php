<?php

// Dynamic Date Creation Area [date]
function displaydate( $atts ){
	$atts = shortcode_atts(
		array(
			'future' => "+0 week",
		), $atts);
	return date('l, F jS', strtotime($atts['future']));
}
add_shortcode('date', 'displaydate');
 
//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );
 
//Register area for custom menu
function register_my_menu() {
    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
    register_nav_menu( 'footer-menu', __( 'Footer Menu' ) );
}

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, true); 

//Some simple code for our widget-enabled sidebar
if ( function_exists('register_sidebar') )
    register_sidebar();

//Code for custom background support
add_custom_background();

//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Menu page
add_action('admin_menu', 'ot_create_menu');
function ot_create_menu() {

	//create not top-level menu
	$icon = get_template_directory_uri() . '/images/icon.png';
	add_menu_page(__('Theme Settings', 'offthemes'), __('offTheme', 'offthemes'), 'administrator', 'offthemes-theme-settings', 'ot_settings_page', $icon);	
}

/**
* Step 2: Create settings fields.
*/
add_action( 'admin_init', 'register_otsettings' );
function register_otsettings() {
	register_setting( 'ot-settings-general', 'ot_analytics_code' );
}

/** 
* Step 3: Create the markup for the options page
*/
function ot_settings_page() {

?>

<div class="wrap">
<h2><?php _e('Theme Settings', 'offthemes'); ?></h2>

<form method="post" action="options.php">
	
	<?php if(isset( $_GET['settings-updated'])) { ?>
	<div class="updated">
        <p><?php _e('Settings updated successfully', $textdomain); ?></p>
    </div>
	<?php } ?>

	<h3>Google Analytics</h3>
	<textarea name="ot_analytics_code"><?php get_option('ot_analytics_code'); ?></textarea>
		
		<?php settings_fields( 'ot-settings-general' ); ?>
		<?php do_settings_sections( 'ot-settings-general' ); ?>
    </table>
    
    <?php submit_button(); ?>
</form>
</div>
<?php }

?>