<?php

function custom_login_page_customize_controls($wp_customize) {
    // Background Color
    $wp_customize->add_setting('custom_login_page_bg_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'custom_login_page_bg_color', array(
        'label' => __('Background Color', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_bg_section',
        'settings' => 'custom_login_page_bg_color',
    )));

    // Logo Image
    $wp_customize->add_setting('custom_login_page_logo', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_login_page_logo', array(
        'label' => __('Logo Image', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_logo_section',
        'settings' => 'custom_login_page_logo',
    )));

    // Form Background Color
    $wp_customize->add_setting('custom_login_page_form_bg_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'custom_login_page_form_bg_color', array(
        'label' => __('Form Background Color', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_form_section',
        'settings' => 'custom_login_page_form_bg_color',
    )));

    // Font Size
    $wp_customize->add_setting('custom_login_page_font_size', array(
        'default' => '16px',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('custom_login_page_font_size', array(
        'label' => __('Font Size', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_typography_section',
        'settings' => 'custom_login_page_font_size',
        'type' => 'text',
    ));

    // Button Background Color
    $wp_customize->add_setting('custom_login_page_button_bg_color', array(
        'default' => '#0073aa',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'custom_login_page_button_bg_color', array(
        'label' => __('Button Background Color', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_buttons_section',
        'settings' => 'custom_login_page_button_bg_color',
    )));

    // Footer Text
    $wp_customize->add_setting('custom_login_page_footer_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('custom_login_page_footer_text', array(
        'label' => __('Footer Text', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_additional_section',
        'settings' => 'custom_login_page_footer_text',
        'type' => 'text',
    ));

    // Placeholder Controls for Other Sections
    $wp_customize->add_setting('custom_login_page_security_placeholder', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('custom_login_page_security_placeholder', array(
        'label' => __('Placeholder', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_security_section',
        'settings' => 'custom_login_page_security_placeholder',
        'type' => 'hidden',
    ));

    $wp_customize->add_setting('custom_login_page_accessibility_placeholder', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('custom_login_page_accessibility_placeholder', array(
        'label' => __('Placeholder', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_accessibility_section',
        'settings' => 'custom_login_page_accessibility_placeholder',
        'type' => 'hidden',
    ));

    $wp_customize->add_setting('custom_login_page_animations_placeholder', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('custom_login_page_animations_placeholder', array(
        'label' => __('Placeholder', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_animations_section',
        'settings' => 'custom_login_page_animations_placeholder',
        'type' => 'hidden',
    ));

    $wp_customize->add_setting('custom_login_page_responsive_placeholder', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('custom_login_page_responsive_placeholder', array(
        'label' => __('Placeholder', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_responsive_section',
        'settings' => 'custom_login_page_responsive_placeholder',
        'type' => 'hidden',
    ));
}
