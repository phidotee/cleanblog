<?php

$args = array(
    'width'         => 1920,
    'height'        => 600,
    'header-text'            => false,
);
add_theme_support( 'custom-header', $args );

add_theme_support( 'post-thumbnails' );
add_image_size( 'single-post-thumbnail', 1920, 600, true );

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'html5', array( 'search-form' ) );

register_nav_menus( array(
    'main' => 'Main menu'
) );

register_sidebar( array(
    'id' => 'footer-copyright',
    'name' => __('Copyright in footer', $text_domain),
    'description' => __('Copyright content in footer'),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => ''
) );

function cleanblog_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'cleanblog_social_media' , array(
        'title'      => __( 'Social Media', 'cleanblog' ),
        'priority'   => 100,
    ) );
    $wp_customize->add_setting( 'twitter' , array(
        'default'     => ''
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array(
        'label'        => __( 'Twitter', 'cleanblog' ),
        'section'    => 'cleanblog_social_media',
        'settings'   => 'twitter',
    ) ) );
    $wp_customize->add_setting( 'facebook' , array(
        'default'     => ''
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array(
        'label'        => __( 'Facebook', 'cleanblog' ),
        'section'    => 'cleanblog_social_media',
        'settings'   => 'facebook',
    ) ) );
    $wp_customize->add_setting( 'github' , array(
        'default'     => ''
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'github', array(
        'label'        => __( 'Github', 'cleanblog' ),
        'section'    => 'cleanblog_social_media',
        'settings'   => 'github',
    ) ) );
}
add_action( 'customize_register', 'cleanblog_customize_register' );

?>
