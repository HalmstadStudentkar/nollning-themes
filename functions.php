<?php
function hemingway_load_style() {
    if ( ! is_admin() ) {
        wp_enqueue_style( 'hemingway_googleFonts', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Raleway:700,400' );
        wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    }
    wp_enqueue_style( 'child-style', get_stylesheet_uri());
}
add_action( 'wp_print_styles', 'hemingway_load_style' );

?>
