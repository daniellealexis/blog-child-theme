<?php
    add_action( 'wp_enqueue_scripts', 'edge_enqueue_styles' );
    function edge_enqueue_styles() {
    	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

        // wp_register_style( 'edge_google_fonts', '//fonts.googleapis.com/css?family=Gentium+Book+Basic');
        // wp_enqueue_style( 'edge_google_fonts' );
    }
?>