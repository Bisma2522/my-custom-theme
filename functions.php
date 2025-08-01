<?php
function mytheme_setup() {
  // Theme supports
  add_theme_support('post-thumbnails'); // Featured images
  add_theme_support('title-tag'); // Dynamic page titles

  // Custom menu
  register_nav_menus([
    'main_menu' => 'Main Menu',
  ]);
}
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_scripts() {
  // Load default style.css
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_scripts');
?>
