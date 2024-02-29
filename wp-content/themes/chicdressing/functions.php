<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
}
// Réduit la taille des images
add_filter( 'big_image_size_threshold', '__return_false' );

// Supprime les polices Google de Ashe Theme
wp_dequeue_style('ashe-playfair-font');
wp_dequeue_style('ashe-opensans-font');
wp_dequeue_style('ashe-kalam-font');
wp_dequeue_style('ashe-rokkitt-font');
wp_deregister_style('ashe_gfonts_scripts');