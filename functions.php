<?php

/**
*	-----------------THEMES AND SCRIPTS----------------------
*/

function theme_styles() {
	wp_enqueue_style(
		"boilerplate",
		$src = get_template_directory_uri() . '/css/boilerplate.css',
		$deps = array(),
		$ver = null,
		$media = 'all'
	);
	wp_enqueue_style(
		"main",
		$src = get_template_directory_uri() . '/style.css',
		$deps = array("boilerplate"),
		$ver = null,
		$media = 'all'
	);
}
add_action('wp_enqueue_scripts', 'theme_styles');

function admin_styles() {
	wp_enqueue_style(
		"admin",
		$src = get_template_directory_uri() . '/css/admin.css',
		$deps = array(),
		$ver = null,
		$media = 'all'
	);
}
add_action('admin_enqueue_scripts', 'admin_styles');


function theme_scripts() {
	wp_enqueue_script(
		"modernizr",
		$src = get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js',
		$deps = array(),
		$ver = null,
		$in_footer = false
	);
	wp_enqueue_script(
		"jquizzle",
		$src = get_template_directory_uri() . '/js/vendor/jquery-1.9.0.min.js',
		$deps = array(),
		$ver = null,
		$in_footer = true
	);
	wp_enqueue_script(
		"plugins",
		$src = get_template_directory_uri() . '/js/plugins.js',
		$deps = array('jquizzle'),
		$ver = null,
		$in_footer = true
	);
	wp_enqueue_script(
		"main",
		$src = get_template_directory_uri() . '/js/main.js',
		$deps = array('jquizzle', 'plugins'),
		$ver = null,
		$in_footer = true
	);
}
add_action('wp_enqueue_scripts', 'theme_scripts');


/**
*	-----------------SIDEBAR AND WIDGETS----------------------
*/

// Register our sidebars and widgetized areas.
// copy-pasted from http://codex.wordpress.org/Widgetizing_Themes
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<section class="widget %2$s clearfix">',
		'after_widget' => '</section>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );






/**
*	-----------------UTILITIES----------------------
*/


function dump($v) {
	echo "<pre>" . print_r($v, true) . "</pre>";
}

?>