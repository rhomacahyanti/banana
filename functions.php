<?php
function banana_styles() {
  wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0', 'all');
  wp_enqueue_style('custom-css', get_template_directory_uri() . '/css/banana.css', array(), '1.0.0', 'all');
  wp_enqueue_style('slick-css', get_template_directory_uri() . '/css/slick.css', array(), '1.8.0', 'all');

  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.0.0', 'all');
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/banana.js', array(), '1.0.0', true);
  wp_enqueue_script('slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '1.8.0', true);
}

add_action('wp_enqueue_scripts', 'banana_styles');

function banana_theme_setup() {
  add_theme_support('menus');
  register_nav_menu('primary-menu', 'Header Navigation');
}

add_action('init', 'banana_theme_setup');

require get_template_directory() . '/bootstrap-navwalker.php';

add_theme_support('post-thumbnails');
?>
