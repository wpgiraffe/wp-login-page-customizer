<?php

function custom_login_page_styles() {
    $bg_image = get_theme_mod('custom_login_page_bg_image', '');
    $bg_color = get_theme_mod('custom_login_page_bg_color', '#ffffff');
    $bg_repeat = get_theme_mod('custom_login_page_bg_repeat', 'no-repeat');
    $bg_position = get_theme_mod('custom_login_page_bg_position', 'center center');
    $bg_size = get_theme_mod('custom_login_page_bg_size', 'cover');
    $logo_url = get_theme_mod('custom_login_page_logo', '');
    $logo_width = get_theme_mod('custom_login_page_logo_width', '84px');
    $logo_height = get_theme_mod('custom_login_page_logo_height', '84px');
    $form_bg_color = get_theme_mod('custom_login_page_form_bg_color', '#ffffff');
    $form_text_color = get_theme_mod('custom_login_page_form_text_color', '#333333');
    $form_border_radius = get_theme_mod('custom_login_page_form_border_radius', '5px');
    $form_padding = get_theme_mod('custom_login_page_form_padding', '20px');
    $font_family = get_theme_mod('custom_login_page_font_family', 'Arial, sans-serif');
    $font_size = get_theme_mod('custom_login_page_font_size', '16px');
    $text_alignment = get_theme_mod('custom_login_page_text_alignment', 'left');
    $button_bg_color = get_theme_mod('custom_login_page_button_bg_color', '#0073aa');
    $button_text_color = get_theme_mod('custom_login_page_button_text_color', '#ffffff');
    $button_hover_bg_color = get_theme_mod('custom_login_page_button_hover_bg_color', '#005177');
    $button_hover_text_color = get_theme_mod('custom_login_page_button_hover_text_color', '#ffffff');
    $mobile_bg_image = get_theme_mod('custom_login_page_mobile_bg_image', '');
    $mobile_bg_color = get_theme_mod('custom_login_page_mobile_bg_color', '#ffffff');
    $mobile_logo_width = get_theme_mod('custom_login_page_mobile_logo_width', '64px');
    $mobile_logo_height = get_theme_mod('custom_login_page_mobile_logo_height', '64px');

    echo '<style type="text/css">';
    if (!empty($bg_image)) {
        echo 'body.login { background-image: url(' . esc_url($bg_image) . ') !important; }';
    }
    if (!empty($bg_color)) {
        echo 'body.login { background-color: ' . esc_attr($bg_color) . ' !important; }';
    }
    echo 'body.login { background-repeat: ' . esc_attr($bg_repeat) . ' !important; background-position: ' . esc_attr($bg_position) . ' !important; background-size: ' . esc_attr($bg_size) . ' !important; }';
    if (!empty($logo_url)) {
        echo '.login h1 a { background-image: url(' . esc_url($logo_url) . ') !important; width: ' . esc_attr($logo_width) . ' !important; height: ' . esc_attr($logo_height) . ' !important; background-size: contain !important; }';
    }
    if (!empty($form_bg_color)) {
        echo '.login form { background-color: ' . esc_attr($form_bg_color) . ' !important; }';
    }
    if (!empty($form_text_color)) {
        echo '.login form, .login form label, .login form input { color: ' . esc_attr($form_text_color) . ' !important; }';
    }
    if (!empty($form_border_radius)) {
        echo '.login form { border-radius: ' . esc_attr($form_border_radius) . ' !important; }';
    }
    if (!empty($form_padding)) {
        echo '.login form { padding: ' . esc_attr($form_padding) . ' !important; }';
    }
    if (!empty($font_family)) {
        echo 'body.login { font-family: ' . esc_attr($font_family) . ' !important; }';
    }
    if (!empty($font_size)) {
        echo 'body.login { font-size: ' . esc_attr($font_size) . ' !important; }';
    }
    echo '.login form, .login form input, .login form label { text-align: ' . esc_attr($text_alignment) . ' !important; }';
    if (!empty($button_bg_color)) {
        echo '.wp-core-ui .button-primary { background-color: ' . esc_attr($button_bg_color) . ' !important; border-color: ' . esc_attr($button_bg_color) . ' !important; color: ' . esc_attr($button_text_color) . ' !important; }';
    }
    if (!empty($button_hover_bg_color)) {
        echo '.wp-core-ui .button-primary:hover { background-color: ' . esc_attr($button_hover_bg_color) . ' !important; border-color: ' . esc_attr($button_hover_bg_color) . ' !important; color: ' . esc_attr($button_hover_text_color) . ' !important; }';
    }
    echo '@media (max-width: 768px) {';
    if (!empty($mobile_bg_image)) {
        echo 'body.login { background-image: url(' . esc_url($mobile_bg_image) . ') !important; }';
    }
    if (!empty($mobile_bg_color)) {
        echo 'body.login { background-color: ' . esc_attr($mobile_bg_color) . ' !important; }';
    }
    echo '.login h1 a { width: ' . esc_attr($mobile_logo_width) . ' !important; height: ' . esc_attr($mobile_logo_height) . ' !important; }';
    echo '}';
    echo '</style>';
}
