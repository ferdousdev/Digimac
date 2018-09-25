<?php
function digimac_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'digimac_theme_enqueue_styles' );

function digimac_et_builder_post_types( $post_types ) {
    $post_types[] = 'service'; 
    return $post_types;
}
add_filter( 'et_builder_post_types', 'digimac_et_builder_post_types' );
