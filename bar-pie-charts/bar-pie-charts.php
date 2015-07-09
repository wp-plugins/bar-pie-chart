<?php 
    /*
    Plugin Name: Bar Pie Charts
    Plugin URI: 
    Description: Plugin for adding awesome bar pie charts
    Author: Lian van der Vyver
    Version: 1.0
    Author URI:
    */

/**
 * Enqueue scripts and styles
 */
function bpc_register_bar_pie_charts_scripts() {
    wp_register_style( 'bar-pie-charts-style', plugins_url( 'css/bar-pie-chart-style.css', __FILE__ ) );
	wp_enqueue_style( 'bar-pie-charts-style' );
    
	wp_enqueue_script( 'bar-pie-chart-js', plugins_url('js/bar-pie-chart.js', __FILE__ ), array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'bpc_register_bar_pie_charts_scripts' );


/**
 * Pie chart Shortcodes
 */
    
function bpc_bar_pie_chart_func($atts){
      $att = shortcode_atts( array(
        'percent' => '50',
        'color' => '#356FF6',
        'size'=> 'large'
          ), $atts );
    
        $randomName = bpc_generate_random_string();
        $bubbleContent= '<div class="bpc-circle-chart '."{$att['size']}".'" data-color="'."{$att['color']}".'" data-percent="'."{$att['percent']}".'" data-barname="'."$randomName".'"></div>';
   
        return $bubbleContent;
}
add_shortcode( 'bpc_bar_pie_chart', 'bpc_bar_pie_chart_func' );

function bpc_generate_random_string($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString."-bar";
}
?>