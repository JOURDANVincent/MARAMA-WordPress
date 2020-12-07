<?php

require get_stylesheet_directory() . '/sections/homepage-featured-posts.php';
require get_stylesheet_directory() . '/customizer/blog-settings.php';

add_action( 'wp_enqueue_scripts', 'bizberg_consulting_dark_chld_thm_parent_css' );
function bizberg_consulting_dark_chld_thm_parent_css() {

    $bizberg_consulting_dark_theme = wp_get_theme();
    $theme_version = $bizberg_consulting_dark_theme->get( 'Version' );

    wp_enqueue_style( 
    	'bizberg_consulting_dark_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	),
        $theme_version
    );
    wp_enqueue_style('my Bizberg', get_stylesheet_directory_uri(), 'style.css');
}

/**
* Change the theme color
*/
add_filter( 'bizberg_theme_color', 'bizberg_consulting_dark_change_theme_color' );
function bizberg_consulting_dark_change_theme_color(){
    return '#dd3333';
}

/**
* Change the theme background
*/
add_filter( 'bizberg_body_background_image', 'bizberg_consulting_dark_body_background_image' );
function bizberg_consulting_dark_body_background_image(){
    return [
        'background-color'      => '#000',
        'background-image'      => '',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    ];
}

add_filter( 'bizberg_theme_text_color', 'bizberg_consulting_dark_theme_text_color' );
function bizberg_consulting_dark_theme_text_color(){
    return '#fff';
}

add_filter( 'bizberg_link_color', 'bizberg_consulting_dark_link_color' );
function bizberg_consulting_dark_link_color(){
    return '#fff';
}

add_filter( 'bizberg_link_color_hover', 'bizberg_consulting_dark_link_color_hover' );
function bizberg_consulting_dark_link_color_hover(){
    return '#dd3333';
}

add_filter( 'bizberg_blog_listing_border', 'bizberg_consulting_dark_blog_listing_border' );
function bizberg_consulting_dark_blog_listing_border(){
    return '#121213';
}

add_filter( 'bizberg_blog_listing_background', 'bizberg_consulting_dark_blog_listing_background' );
function bizberg_consulting_dark_blog_listing_background(){
    return '#121213';
}

add_filter( 'bizberg_blog_listing_box_shadow', 'bizberg_consulting_dark_blog_listing_box_shadow' );
function bizberg_consulting_dark_blog_listing_box_shadow(){
    return '#121213';
}

add_filter( 'bizberg_blog_listing_meta_divider_color', 'bizberg_consulting_dark_blog_listing_meta_divider_color' );
function bizberg_consulting_dark_blog_listing_meta_divider_color(){
    return '#262626';
}

add_filter( 'bizberg_blog_listing_pagination_border', 'bizberg_consulting_dark_blog_listing_pagination_border' );
function bizberg_consulting_dark_blog_listing_pagination_border(){
    return '#fff';
}

add_filter( 'bizberg_blog_listing_pagination_text', 'bizberg_consulting_dark_blog_listing_pagination_text' );
function bizberg_consulting_dark_blog_listing_pagination_text(){
    return '#fff';
}

add_filter( 'bizberg_blog_listing_pagination_active_hover_color', 'bizberg_consulting_dark_blog_listing_pagination_active_hover_color' );
function bizberg_consulting_dark_blog_listing_pagination_active_hover_color(){
    return '#dd3333';
}

add_filter( 'bizberg_sidebar_widget_link_color', 'bizberg_consulting_dark_sidebar_widget_link_color' );
function bizberg_consulting_dark_sidebar_widget_link_color(){
    return '#fff';
}

add_filter( 'bizberg_sidebar_widget_link_color_hover', 'bizberg_consulting_dark_sidebar_widget_link_color_hover' );
function bizberg_consulting_dark_sidebar_widget_link_color_hover(){
    return '#dd3333';
}

add_filter( 'bizberg_sidebar_widget_background_color', 'bizberg_consulting_dark_sidebar_widget_background_color' );
function bizberg_consulting_dark_sidebar_widget_background_color(){
    return '#000';
}

add_filter( 'bizberg_sidebar_widget_border_color', 'bizberg_consulting_dark_sidebar_widget_border_color' );
function bizberg_consulting_dark_sidebar_widget_border_color(){
    return '#000';
}

add_filter( 'bizberg_sidebar_widget_title_color', 'bizberg_consulting_dark_sidebar_widget_title_color' );
function bizberg_consulting_dark_sidebar_widget_title_color(){
    return '#dd3333';
}

add_filter( 'bizberg_sidebar_widget_link_separator', 'bizberg_consulting_dark_sidebar_widget_link_separator' );
function bizberg_consulting_dark_sidebar_widget_link_separator(){
    return '#303030';
}

add_filter( 'bizberg_sidebar_widget_select_color', 'bizberg_consulting_dark_sidebar_widget_select_color' );
function bizberg_consulting_dark_sidebar_widget_select_color(){
    return '#000';
}

add_filter( 'bizberg_primary_header_layout', 'bizberg_consulting_dark_primary_header_layout' );
function bizberg_consulting_dark_primary_header_layout(){
    return 'center';
}

add_filter( 'bizberg_site_title_font', 'bizberg_consulting_dark_site_title_font' );
function bizberg_consulting_dark_site_title_font(){
    return [
        'font-family'    => 'Dancing Script',
        'variant'        => 'regular',
        'font-size'      => '80px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
        'text-align'     => 'center',
    ];
}

add_filter( 'bizberg_site_tagline_font', 'bizberg_consulting_dark_site_tagline_font' );
function bizberg_consulting_dark_site_tagline_font(){
    return [
        'font-family'    => 'Open Sans',
        'variant'        => 'regular',
        'font-size'      => '17px',
        'line-height'    => '1.8',
        'letter-spacing' => '2',
        'text-transform' => 'uppercase',
        'text-align'     => 'center',
    ];
}

add_filter( 'bizberg_header_site_title_color', 'bizberg_consulting_dark_header_site_title_color' );
function bizberg_consulting_dark_header_site_title_color(){
    return '#fff';
}

add_filter( 'bizberg_header_site_title_color_sticky_menu', 'bizberg_consulting_dark_header_site_title_color_sticky_menu' );
function bizberg_consulting_dark_header_site_title_color_sticky_menu(){
    return '#fff';
}

add_filter( 'bizberg_header_site_tagline_color', 'bizberg_consulting_dark_header_site_tagline_color' );
function bizberg_consulting_dark_header_site_tagline_color(){
    return '#fff';
}

add_filter( 'bizberg_header_site_tagline_color_sticky_menu', 'bizberg_consulting_dark_header_site_tagline_color_sticky_menu' );
function bizberg_consulting_dark_header_site_tagline_color_sticky_menu(){
    return '#fff';
}

add_filter( 'bizberg_header_navbar_background_1', 'bizberg_consulting_dark_header_navbar_background_1' );
function bizberg_consulting_dark_header_navbar_background_1(){
    return '#000';
}

add_filter( 'bizberg_header_navbar_background_2', 'bizberg_consulting_dark_header_navbar_background_2' );
function bizberg_consulting_dark_header_navbar_background_2(){
    return '#000';
}

add_filter( 'bizberg_header_menu_text_color', 'bizberg_consulting_dark_header_menu_text_color' );
function bizberg_consulting_dark_header_menu_text_color(){
    return '#fff';
}

add_filter( 'bizberg_header_menu_separator', 'bizberg_consulting_dark_header_menu_separator' );
function bizberg_consulting_dark_header_menu_separator(){
    return '#000';
}

add_filter( 'bizberg_header_menu_color_hover', 'bizberg_consulting_dark_header_menu_color_hover' );
function bizberg_consulting_dark_header_menu_color_hover(){
    return '#dd3333';
}

add_filter( 'bizberg_primary_header_layout_bottom_border_size', 'bizberg_consulting_dark_primary_header_layout_bottom_border_size' );
function bizberg_consulting_dark_primary_header_layout_bottom_border_size(){
    return '1';
}

add_filter( 'bizberg_primary_header_layout_top_border_color', 'bizberg_consulting_dark_primary_header_layout_top_border_color' );
add_filter( 'bizberg_primary_header_layout_bottom_border_color', 'bizberg_consulting_dark_primary_header_layout_top_border_color' );
function bizberg_consulting_dark_primary_header_layout_top_border_color(){
    return '#2f2f2f';
}

add_filter( 'bizberg_blog_detail_content_border_color', 'bizberg_consulting_dark_blog_detail_content_border_color' );
add_filter( 'bizberg_blog_detail_content_background', 'bizberg_consulting_dark_blog_detail_content_border_color' );
function bizberg_consulting_dark_blog_detail_content_border_color(){
    return '#121213';
}

add_filter( 'bizberg_blog_detail_meta_divider_color', 'bizberg_consulting_dark_blog_detail_meta_divider_color' );
add_filter( 'bizberg_blog_detail_comment_divider_color', 'bizberg_consulting_dark_blog_detail_meta_divider_color' );
add_filter( 'bizberg_blog_detail_comment_input_border_color', 'bizberg_consulting_dark_blog_detail_meta_divider_color' );
add_filter( 'bizberg_blog_detail_comment_input_background_color', 'bizberg_consulting_dark_blog_detail_meta_divider_color' );
function bizberg_consulting_dark_blog_detail_meta_divider_color(){
    return '#262626';
}

add_filter( 'bizberg_heading_color', 'bizberg_consulting_dark_heading_color' );
function bizberg_consulting_dark_heading_color(){
    return '#fff';
}

add_filter( 'bizberg_body_typo_heading_4_status', 'bizberg_consulting_dark_body_typo_heading_4_status' );
function bizberg_consulting_dark_body_typo_heading_4_status(){
    return true;
}

add_filter( 'bizberg_typography_h4', 'bizberg_consulting_dark_typography_h4' );
function bizberg_consulting_dark_typography_h4(){
    return [
        'font-family'    => 'PT Sans',
        'variant'        => 'regular',
        'font-size'      => '27px',
        'line-height'    => '1.3',
        'letter-spacing' => '0',
        'text-transform' => 'inherit'
    ];
}

add_filter( 'bizberg_theme_container_width', 'bizberg_consulting_dark_theme_container_width' );
function bizberg_consulting_dark_theme_container_width(){
    return 1270;
}

add_filter( 'bizberg_header_menu_toggle_color_mobile', 'bizberg_consulting_dark_header_menu_toggle_color_mobile' );
function bizberg_consulting_dark_header_menu_toggle_color_mobile(){
    return '#fff';
}

add_filter( 'bizberg_body_content_typo_status', 'bizberg_consulting_dark_body_content_typo_status' );
function bizberg_consulting_dark_body_content_typo_status(){
    return true;
}

add_filter( 'bizberg_typography_body_content', 'bizberg_consulting_dark_typography_body_content' );
function bizberg_consulting_dark_typography_body_content(){
    return [
        'font-family'    => 'Open Sans',
        'variant'        => 'regular',
        'font-size'      => '15px',
        'line-height'    => '1.8'
    ];
}

add_filter( 'bizberg_body_typo_heading_3_status', 'bizberg_consulting_dark_body_typo_heading_3_status' );
function bizberg_consulting_dark_body_typo_heading_3_status(){
    return true;
}

add_filter( 'bizberg_typography_h3', 'bizberg_consulting_dark_bizberg_typography_h3' );
function bizberg_consulting_dark_bizberg_typography_h3(){
    return [
        'font-family'    => 'PT Sans',
        'variant'        => '700',
        'font-size'      => '30px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'inherit'
    ];
}

/**
* For Slider
*/

add_filter( 'bizberg_slider_banner_settings', 'bizberg_consulting_dark_slider_banner_settings' );
function bizberg_consulting_dark_slider_banner_settings(){
    return 'slider';
}

add_filter( 'bizberg_shape_divider_bottom', 'bizberg_consulting_dark_shape_divider_bottom' );
function bizberg_consulting_dark_shape_divider_bottom(){
    return 'none';
}

add_filter( 'bizberg_slider_title_font_desktop_tablet', 'bizberg_consulting_dark_slider_title_font_desktop_tablet' );
function bizberg_consulting_dark_slider_title_font_desktop_tablet(){
    return [
        'font-family'    => 'PT Sans',
        'variant'        => '700',
        'font-size'      => '45px',
        'line-height'    => '1.2',
        'letter-spacing' => '0',
        'color'          => '#fff',
        'text-transform' => 'none',
    ];
}

add_filter( 'bizberg_slider_title_box_highlight_color', 'bizberg_consulting_dark_slider_title_box_highlight_color' );
add_filter( 'bizberg_slider_arrow_background_color', 'bizberg_consulting_dark_slider_title_box_highlight_color' );
add_filter( 'bizberg_read_more_background_color', 'bizberg_consulting_dark_slider_title_box_highlight_color' );
add_filter( 'bizberg_read_more_background_color_2', 'bizberg_consulting_dark_slider_title_box_highlight_color' );
add_filter( 'bizberg_slider_dot_active_color', 'bizberg_consulting_dark_slider_title_box_highlight_color' );
function bizberg_consulting_dark_slider_title_box_highlight_color(){
    return '#dd3333';
}

add_filter( 'bizberg_slider_read_more_font', 'bizberg_consulting_dark_slider_read_more_font' );
function bizberg_consulting_dark_slider_read_more_font(){
    return [
        'font-family'    => 'Poppins',
        'variant'        => '600',
        'font-size'      => '14px',
        'line-height'    => '1.2',
        'letter-spacing' => '0px',
        'color'          => '#fff',
        'text-transform' => 'capitalize'
    ];
}

add_filter( 'bizberg_arrow_style', 'bizberg_consulting_dark_bizberg_arrow_style' );
function bizberg_consulting_dark_bizberg_arrow_style(){
    return 'diamond';
}

add_filter( 'bizberg_arrow_size', 'bizberg_consulting_dark_arrow_size' );
function bizberg_consulting_dark_arrow_size(){
    return 50;
}

add_filter( 'bizberg_slider_gradient_primary_color', 'bizberg_consulting_dark_slider_gradient_primary_color' );
function bizberg_consulting_dark_slider_gradient_primary_color(){
    return 'rgba(20,0,0,0.30)';
}

add_filter( 'bizberg_slider_gradient_secondary_color', 'bizberg_consulting_dark_slider_gradient_secondary_color' );
function bizberg_consulting_dark_slider_gradient_secondary_color(){
    return 'rgba(221,51,51,0.3)';
}

add_filter( 'bizberg_header_menu_child_menu_background', 'bizberg_consulting_dark_header_menu_child_menu_background' );
add_filter( 'bizberg_header_menu_child_menu_border', 'bizberg_consulting_dark_header_menu_child_menu_background' );
function bizberg_consulting_dark_header_menu_child_menu_background(){
    return '#121213';
}

add_filter( 'bizberg_header_menu_child_menu_text_color', 'bizberg_consulting_dark_header_menu_child_menu_text_color' );
function bizberg_consulting_dark_header_menu_child_menu_text_color(){
    return '#fff';
}

add_filter( 'bizberg_header_menu_child_menu_border', 'bizberg_consulting_dark_header_menu_child_menu_border' );
function bizberg_consulting_dark_header_menu_child_menu_border(){
    return 'rgba(37,37,38,0.57)';
}

add_filter( 'bizberg_header_navbar_background_1_sticky_menu', 'bizberg_consulting_dark_header_navbar_background_1_sticky_menu' );
add_filter( 'bizberg_header_navbar_background_2_sticky_menu', 'bizberg_consulting_dark_header_navbar_background_1_sticky_menu' );
add_filter( 'bizberg_header_menu_separator_sticky_menu', 'bizberg_consulting_dark_header_navbar_background_1_sticky_menu' );
function bizberg_consulting_dark_header_navbar_background_1_sticky_menu(){
    return '#dd3333';
}

add_filter( 'bizberg_header_menu_text_color_sticky_menu', 'bizberg_consulting_dark_header_menu_text_color_sticky_menu' );
function bizberg_consulting_dark_header_menu_text_color_sticky_menu(){
    return '#fff';
}

add_filter( 'bizberg_header_menu_color_hover_sticky_menu', 'bizberg_consulting_dark_header_menu_color_hover_sticky_menu' );
function bizberg_consulting_dark_header_menu_color_hover_sticky_menu(){
    return '#c71d1d';
}

add_filter( 'bizberg_header_menu_child_menu_background_sticky_menu', 'bizberg_consulting_dark_header_menu_child_menu_background_sticky_menu' );
function bizberg_consulting_dark_header_menu_child_menu_background_sticky_menu(){
    return '#dd3333';
}

add_filter( 'bizberg_header_menu_child_menu_border_sticky_menu', 'bizberg_consulting_dark_header_menu_child_menu_border_sticky_menu' );
function bizberg_consulting_dark_header_menu_child_menu_border_sticky_menu(){
    return '#df4343';
}

add_filter( 'bizberg_header_menu_child_menu_text_color_sticky_menu', 'bizberg_consulting_dark_header_menu_child_menu_text_color_sticky_menu' );
function bizberg_consulting_dark_header_menu_child_menu_text_color_sticky_menu(){
    return '#fff';
}

add_filter( 'bizberg_blog_detail_comment_input_text_color', 'bizberg_consulting_dark_blog_detail_comment_input_text_color' );
function bizberg_consulting_dark_blog_detail_comment_input_text_color(){
    return '#fff';
}

add_filter( 'bizberg_header_columns_middle_style', 'bizberg_consulting_dark_header_columns_middle_style' );
function bizberg_consulting_dark_header_columns_middle_style(){
    return 'col-sm-2|col-sm-8|col-sm-2';
}

add_filter( 'bizberg_footer_social_icon_color', 'bizberg_consulting_dark_footer_social_icon_color' );
function bizberg_consulting_dark_footer_social_icon_color(){
    return '#dd3333';
}

add_filter( 'bizberg_footer_copyright_background', 'bizberg_consulting_dark_footer_copyright_background' );
function bizberg_consulting_dark_footer_copyright_background(){
    return '#b11a1a';
}

add_filter( 'bizberg_banner_image', 'bizberg_consulting_dark_banner_image' );
function bizberg_consulting_dark_banner_image(){
    return [
        'background-color'      => 'rgba(20,20,20,.8)',
        'background-image'      => get_stylesheet_directory_uri() . '/images/writing-watch-hand-man-suit-newspaper-113574-pxhere.com.jpg',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    ];
}

add_filter( 'bizberg_banner_spacing', 'bizberg_consulting_banner_spacing' );
function bizberg_consulting_banner_spacing(){
    return [
        'padding-top'    => '165px',
        'padding-bottom' => '165px',
        'padding-left'   => '0px',
        'padding-right'  => '0px',
    ];
}

add_filter( 'bizberg_banner_text_position', 'bizberg_consulting_dark_banner_text_position' );
function bizberg_consulting_dark_banner_text_position(){
    return 'center';
}

add_filter( 'bizberg_typography_h1', 'bizberg_consulting_dark_typography_h1' );
function bizberg_consulting_dark_typography_h1(){
    return [
        'font-family'    => 'PT Sans',
        'variant'        => '700',
        'font-size'      => '55px',
        'line-height'    => '1.1',
        'letter-spacing' => '0',
        'text-transform' => 'inherit'
    ];
}

add_filter( 'bizberg_body_typo_heading_1_status', 'bizberg_consulting_dark_body_typo_heading_1_status' );
function bizberg_consulting_dark_body_typo_heading_1_status(){
    return true;
}

add_filter( 'bizberg_banner_title', 'bizberg_consulting_dark_banner_title' );
function bizberg_consulting_dark_banner_title(){
    return esc_html__( 'Martin Peterson' , 'bizberg-consulting-dark' );
}

add_filter( 'bizberg_homepage_blog_title', 'bizberg_consulting_dark_bizberg_homepage_blog_title' );
function bizberg_consulting_dark_bizberg_homepage_blog_title(){
    return esc_html__( 'Latest Posts' , 'bizberg-consulting-dark' );
}

add_filter( 'bizberg_theme_output_css', 'bizberg_consulting_dark_theme_output_css' );
function bizberg_consulting_dark_theme_output_css( $output ){

    $output[] = array(
        'element'  => '.primary_header_2 a.logo:focus h3,.primary_header_2 a.logo:focus p',
        'property' => 'color'
    );

    $output[] = array(
        'element'  => '.detail-content.single_page a, .bizberg-list .entry-content p a, .comment-list .comment-content a, .widget_text.widget a, #comments ul.comment-item li .comment-header > a:focus',
        'property' => 'color'
    );

    $output[] = array(
        'element'  => '.detail-content.single_page .bizberg_post_date a:after, #comments a:focus code',
        'property' => 'background'
    );

    return $output;

}