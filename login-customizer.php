<?php
/*
Plugin Name: Customize Login Page
Description: Customize the WordPress login page with various settings.
Version: 1.0
Author: WP Giraffe
*/

// Include customizer sections, controls, and styles
require_once plugin_dir_path(__FILE__) . 'inc/customizer-sections.php';
require_once plugin_dir_path(__FILE__) . 'inc/customizer-controls.php';
require_once plugin_dir_path(__FILE__) . 'inc/customizer-styles.php';

// Hook into the Customizer
add_action('customize_register', 'custom_login_page_customize_register');

function custom_login_page_customize_register($wp_customize) {
    // Register sections and controls
    custom_login_page_customize_sections($wp_customize);
    custom_login_page_customize_controls($wp_customize);
}

// Hook to enqueue custom styles
add_action('login_enqueue_scripts', 'custom_login_page_styles');