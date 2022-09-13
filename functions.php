<?php
function add_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap-grid.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap-reboot.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap-utilities.css');

    wp_enqueue_style('css', get_template_directory_uri() . '/css/main.css');

    wp_enqueue_script('script', get_template_directory_uri() . '/js/slider.js', true);
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');
