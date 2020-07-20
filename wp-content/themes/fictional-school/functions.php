<?php
    function schoolFiles() {
        wp_enqueue_style('schoolMainStyles',get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts','schoolFiles');