<?php 
/**
 * Enqueue scripts and styles.
 */

if ( ! function_exists( 'parentThemeName_child_enqueue_styles' ) ) {
    add_action( 'wp_enqueue_scripts', 'parentThemeName_child_enqueue_styles' );
    function parentThemeName_child_enqueue_styles() {
        $parenthandle = 'parentThemeStyleCssId';
        $theme = wp_get_theme();


        wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', array(), $theme->parent()->get('Version'));
        wp_enqueue_style( 'backhoe-child-style', get_stylesheet_uri(), array( $parenthandle ), $theme->get('Version'));


        wp_enqueue_script( 'child-main-js', get_stylesheet_directory_uri() . '/assets/js/child-main.js', array (), 1.0, true);
    }
}



