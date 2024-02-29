<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/chicdressing/style.css', array(), filemtime(get_stylesheet_directory() . '/chicdressing/style.css'));
}

add_filter( 'big_image_size_threshold', '__return_false' );