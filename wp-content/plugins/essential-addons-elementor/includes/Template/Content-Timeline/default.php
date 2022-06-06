<?php

/**
 * Template Name: Default
 *
 */
use Essential_Addons_Elementor\Pro\Classes\Helper;
if ( !defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly


echo '<div class="eael-content-timeline-block">
    <div class="eael-content-timeline-line">
        <div class="eael-content-timeline-inner"></div>
    </div>
    <div class="eael-content-timeline-img eael-picture '.(('bullet' === $settings['eael_show_image_or_icon']) ? 'eael-content-timeline-bullet': '').'">';
    
        printf($content['image']);

    echo '</div>';

    echo '<div class="eael-content-timeline-content">';
        if( 'yes' == $settings['eael_show_title'] ) {
            echo '<'.Helper::eael_pro_validate_html_tag($settings['title_tag']).' class="eael-timeline-title"><a href="'.esc_url( $content['permalink'] ).'"' . $content['nofollow'] . '' . $content['target_blank'] .'>'.$content['title'].'</a></'.Helper::eael_pro_validate_html_tag($settings['title_tag']).'>';
        }

        if( 'yes' == $settings['eael_show_excerpt'] ) {
            printf($content['excerpt']);
        }

        printf($content['read_more_btn']);

        echo '<span class="eael-date">';
        printf($content['date']);
        echo '</span>';
echo '</div></div>';