<?php

/**
 * Theme Customizer
 */

if (!function_exists('attribute_canva_customize_register')) {
    /**
     * Add theme customizer options
     */
    function attribute_canva_customize_register($wp_customize)
    {
        // Accent color setting
        $wp_customize->add_setting('attribute_canva_accent_color', array(
            'default'   => '#FF5722',
            'transport' => 'refresh',
        ));

        // Add color customization section
        $wp_customize->add_section('attribute_canva_colors', array(
            'title'    => __('Theme Colors', 'attr-canva'),
            'priority' => 30,
        ));

        // Add color control
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'attribute_canva_accent_color', array(
            'label'    => __('Accent Color', 'attr-canva'),
            'section'  => 'attribute_canva_colors',
            'settings' => 'attribute_canva_accent_color',
        )));
    }
    add_action('customize_register', 'attribute_canva_customize_register');
}