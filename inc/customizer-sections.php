<?php

function custom_login_page_customize_sections($wp_customize) {
    // Add Parent Panel
    $wp_customize->add_panel('custom_login_page_panel', array(
        'title' => __('Login Page Customizer', 'custom-login-page-customizer'),
        'priority' => 30,
    ));

    // Add Sections
    $wp_customize->add_section('custom_login_page_bg_section', array(
        'title' => __('Login Page Background', 'custom-login-page-customizer'),
        'priority' => 31,
        'panel' => 'custom_login_page_panel',
    ));
    // Add Background Image setting and control
    $wp_customize->add_setting('custom_login_page_bg_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_login_page_bg_image', array(
        'label' => __('Background Image', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_bg_section',
        'settings' => 'custom_login_page_bg_image',
    )));

    // Add Background Color setting and control
    $wp_customize->add_setting('custom_login_page_bg_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'custom_login_page_bg_color', array(
        'label' => __('Background Color', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_bg_section',
        'settings' => 'custom_login_page_bg_color',
    )));

    // Add Background Repeat setting and control
    $wp_customize->add_setting('custom_login_page_bg_repeat', array(
        'default' => 'no-repeat',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('custom_login_page_bg_repeat', array(
        'label' => __('Background Repeat', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_bg_section',
        'settings' => 'custom_login_page_bg_repeat',
        'type' => 'select',
        'choices' => array(
            'no-repeat' => __('No Repeat', 'custom-login-page-customizer'),
            'repeat' => __('Tile', 'custom-login-page-customizer'),
            'repeat-x' => __('Tile Horizontally', 'custom-login-page-customizer'),
            'repeat-y' => __('Tile Vertically', 'custom-login-page-customizer'),
        ),
    ));

    // Add Background Position setting and control
    $wp_customize->add_setting('custom_login_page_bg_position', array(
        'default' => 'center center',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('custom_login_page_bg_position', array(
        'label' => __('Background Position', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_bg_section',
        'settings' => 'custom_login_page_bg_position',
        'type' => 'select',
        'choices' => array(
            'left top' => __('Left Top', 'custom-login-page-customizer'),
            'left center' => __('Left Center', 'custom-login-page-customizer'),
            'left bottom' => __('Left Bottom', 'custom-login-page-customizer'),
            'center top' => __('Center Top', 'custom-login-page-customizer'),
            'center center' => __('Center Center', 'custom-login-page-customizer'),
            'center bottom' => __('Center Bottom', 'custom-login-page-customizer'),
            'right top' => __('Right Top', 'custom-login-page-customizer'),
            'right center' => __('Right Center', 'custom-login-page-customizer'),
            'right bottom' => __('Right Bottom', 'custom-login-page-customizer'),
        ),
    ));

    // Add Background Size setting and control
    $wp_customize->add_setting('custom_login_page_bg_size', array(
        'default' => 'cover',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('custom_login_page_bg_size', array(
        'label' => __('Background Size', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_bg_section',
        'settings' => 'custom_login_page_bg_size',
        'type' => 'select',
        'choices' => array(
            'auto' => __('Auto', 'custom-login-page-customizer'),
            'cover' => __('Cover', 'custom-login-page-customizer'),
            'contain' => __('Contain', 'custom-login-page-customizer'),
        ),
    ));

    #++++++++++++++++++++++++++++ LOGO SECTION ++++++++++++++++++++++++++++
    $wp_customize->add_section('custom_login_page_logo_section', array(
        'title' => __('Login Page Logo', 'custom-login-page-customizer'),
        'priority' => 32,
        'panel' => 'custom_login_page_panel',
    ));
    // Add Logo Image setting and control
    $wp_customize->add_setting('custom_login_page_logo', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_login_page_logo', array(
        'label' => __('Logo Image', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_logo_section',
        'settings' => 'custom_login_page_logo',
    )));

    // Add Logo Width setting and control
    $wp_customize->add_setting('custom_login_page_logo_width', array(
        'default' => '84px',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('custom_login_page_logo_width', array(
        'label' => __('Logo Width', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_logo_section',
        'settings' => 'custom_login_page_logo_width',
        'type' => 'text',
    ));

    // Add Logo Height setting and control
    $wp_customize->add_setting('custom_login_page_logo_height', array(
        'default' => '84px',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('custom_login_page_logo_height', array(
        'label' => __('Logo Height', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_logo_section',
        'settings' => 'custom_login_page_logo_height',
        'type' => 'text',
    ));

    #++++++++++++++++++++++++++++ FORM STYLING ++++++++++++++++++++++++++++
    $wp_customize->add_section('custom_login_page_form_section', array(
        'title' => __('Login Page Form Styling', 'custom-login-page-customizer'),
        'priority' => 33,
        'panel' => 'custom_login_page_panel',
    ));
    // Add Form Background Color setting and control
    $wp_customize->add_setting('custom_login_page_form_bg_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'custom_login_page_form_bg_color', array(
        'label' => __('Form Background Color', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_form_section',
        'settings' => 'custom_login_page_form_bg_color',
    )));

    // Add Form Text Color setting and control
    $wp_customize->add_setting('custom_login_page_form_text_color', array(
        'default' => '#333333',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'custom_login_page_form_text_color', array(
        'label' => __('Form Text Color', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_form_section',
        'settings' => 'custom_login_page_form_text_color',
    )));

    // Add Form Border Radius setting and control
    $wp_customize->add_setting('custom_login_page_form_border_radius', array(
        'default' => '5px',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('custom_login_page_form_border_radius', array(
        'label' => __('Form Border Radius', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_form_section',
        'settings' => 'custom_login_page_form_border_radius',
        'type' => 'text',
    ));

    // Add Form Padding setting and control
    $wp_customize->add_setting('custom_login_page_form_padding', array(
        'default' => '20px',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('custom_login_page_form_padding', array(
        'label' => __('Form Padding', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_form_section',
        'settings' => 'custom_login_page_form_padding',
        'type' => 'text',
    ));

    #++++++++++++++++++++++++++++ TypoGraphy ++++++++++++++++++++++++++++
    $wp_customize->add_section('custom_login_page_typography_section', array(
        'title' => __('Login Page Typography', 'custom-login-page-customizer'),
        'priority' => 34,
        'panel' => 'custom_login_page_panel',
    ));
    // Add Font Family setting and control
    $wp_customize->add_setting('custom_login_page_font_family', array(
        'default' => 'Arial, sans-serif',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('custom_login_page_font_family', array(
        'label' => __('Font Family', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_typography_section',
        'settings' => 'custom_login_page_font_family',
        'type' => 'select',
        'choices' => array(
            'Arial, sans-serif' => 'Arial, sans-serif',
            '"Helvetica Neue", Helvetica, Arial, sans-serif' => 'Helvetica, Arial, sans-serif',
            '"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Geneva, Verdana, sans-serif' => 'Lucida Grande, Geneva, Verdana, sans-serif',
            'Georgia, serif' => 'Georgia, serif',
            '"Times New Roman", Times, serif' => 'Times New Roman, Times, serif',
            'Tahoma, Geneva, Verdana, sans-serif' => 'Tahoma, Geneva, Verdana, sans-serif',
            '"Trebuchet MS", Helvetica, sans-serif' => 'Trebuchet MS, Helvetica, sans-serif',
            'Verdana, Geneva, sans-serif' => 'Verdana, Geneva, sans-serif',
            'Courier, monospace' => 'Courier, monospace',
            '"Courier New", Courier, monospace' => 'Courier New, Courier, monospace',
        ),
    ));

    // Add Font Size setting and control
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

    // Add Text Alignment setting and control
    $wp_customize->add_setting('custom_login_page_text_alignment', array(
        'default' => 'left',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('custom_login_page_text_alignment', array(
        'label' => __('Text Alignment', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_typography_section',
        'settings' => 'custom_login_page_text_alignment',
        'type' => 'select',
        'choices' => array(
            'left' => __('Left', 'custom-login-page-customizer'),
            'center' => __('Center', 'custom-login-page-customizer'),
            'right' => __('Right', 'custom-login-page-customizer'),
        ),
    ));

    #++++++++++++++++++++++++++++ Buttons ++++++++++++++++++++++++++++
    $wp_customize->add_section('custom_login_page_buttons_section', array(
        'title' => __('Login Page Buttons', 'custom-login-page-customizer'),
        'priority' => 35,
        'panel' => 'custom_login_page_panel',
    ));
    // Add Button Background Color setting and control
    $wp_customize->add_setting('custom_login_page_button_bg_color', array(
        'default' => '#0073aa',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'custom_login_page_button_bg_color', array(
        'label' => __('Button Background Color', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_buttons_section',
        'settings' => 'custom_login_page_button_bg_color',
    )));

    // Add Button Text Color setting and control
    $wp_customize->add_setting('custom_login_page_button_text_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'custom_login_page_button_text_color', array(
        'label' => __('Button Text Color', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_buttons_section',
        'settings' => 'custom_login_page_button_text_color',
    )));

    // Add Button Hover Background Color setting and control
    $wp_customize->add_setting('custom_login_page_button_hover_bg_color', array(
        'default' => '#005177',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'custom_login_page_button_hover_bg_color', array(
        'label' => __('Button Hover Background Color', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_buttons_section',
        'settings' => 'custom_login_page_button_hover_bg_color',
    )));

    // Add Button Hover Text Color setting and control
    $wp_customize->add_setting('custom_login_page_button_hover_text_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'custom_login_page_button_hover_text_color', array(
        'label' => __('Button Hover Text Color', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_buttons_section',
        'settings' => 'custom_login_page_button_hover_text_color',
    )));
    #++++++++++++++++++++++++++++ Responsive ++++++++++++++++++++++++++++
    $wp_customize->add_section('custom_login_page_responsive_section', array(
        'title' => __('Responsive Settings', 'custom-login-page-customizer'),
        'priority' => 40,
        'panel' => 'custom_login_page_panel',
    ));
    // Add Mobile Background Image setting and control
    $wp_customize->add_setting('custom_login_page_mobile_bg_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'custom_login_page_mobile_bg_image', array(
        'label' => __('Mobile Background Image', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_responsive_section',
        'settings' => 'custom_login_page_mobile_bg_image',
    )));

    // Add Mobile Background Color setting and control
    $wp_customize->add_setting('custom_login_page_mobile_bg_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'custom_login_page_mobile_bg_color', array(
        'label' => __('Mobile Background Color', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_responsive_section',
        'settings' => 'custom_login_page_mobile_bg_color',
    )));

    // Add Mobile Logo Width setting and control
    $wp_customize->add_setting('custom_login_page_mobile_logo_width', array(
        'default' => '64px',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('custom_login_page_mobile_logo_width', array(
        'label' => __('Mobile Logo Width', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_responsive_section',
        'settings' => 'custom_login_page_mobile_logo_width',
        'type' => 'text',
    ));

    // Add Mobile Logo Height setting and control
    $wp_customize->add_setting('custom_login_page_mobile_logo_height', array(
        'default' => '64px',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('custom_login_page_mobile_logo_height', array(
        'label' => __('Mobile Logo Height', 'custom-login-page-customizer'),
        'section' => 'custom_login_page_responsive_section',
        'settings' => 'custom_login_page_mobile_logo_height',
        'type' => 'text',
    ));
}