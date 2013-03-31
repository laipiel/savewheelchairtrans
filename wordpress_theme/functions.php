<?php

function load_scripts_with_jquery() {
	// Register the scripts
	wp_register_script('custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script('custom-script');
}

add_action('wp_enqueue_scripts', 'load_scripts_with_jquery');

if (function_exists('register_sidebar'))
  register_sidebar(array(
  	'before_widget' => '',
  	'after_widget' => '',
  	'before_title' => '<h3>',
  	'after_title' => '</h3>',
  ));

add_theme_support( 'post-thumbnails');

?>