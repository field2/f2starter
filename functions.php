<?php
/**
 * artists-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package artists-theme
 */




if ( ! function_exists( 'f2_starter_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function f2_starter_setup() {

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support('post-thumbnails');
		register_nav_menus(array('primary' => 'Primary Nav', 'footer' => 'Footer Nav', 'social' => 'Social Nav'));



		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );


	}
endif;
add_action( 'after_setup_theme', 'f2_starter_setup' );

/**
 * Enqueue scripts and styles.
 */
function f2_starter_scripts() {
	wp_enqueue_style( 'artists-theme-style', get_stylesheet_uri() );
wp_enqueue_script('site', get_template_directory_uri() . '/js/scripts.js', array('jquery-ui-core', 'jquery'), null, true);
   wp_enqueue_style( 'dashicons' );

}


add_action( 'wp_enqueue_scripts', 'f2_starter_scripts' );


/** shows what main file is being loaded **/
// add_action('wp_head', 'show_template');
// function show_template() {
// global $template;
// print_r($template);
// }


function f2_starterwidgets_init() {
	register_sidebar(array(
		'id' => 'sidebar',
		'name' => 'Sidebar Widgets',
	));
	register_sidebar(array(
		'id' => 'blog_sidebar',
		'name' => 'Blog Sidebar',
	));
}
add_action('widgets_init', 'f2_starterwidgets_init');

// enable svg uploads. WP please fix this
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

