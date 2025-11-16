<?php
// Load stylesheet
add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style('theme-style', get_stylesheet_uri());
});

// Register menu
add_action('init', function() {
  register_nav_menus([
    'primary' => __('Primary Menu', 'theme'),
  ]);
});
