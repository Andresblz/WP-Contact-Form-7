<?php

add_action('wpcf7_init', 'custom_code_generator');

function custom_code_generator() {
    wpcf7_add_form_tag('coupon_code', 'custom_code_handler');
}

function custom_code_handler() {
  	$year1 = date("Y");
    $year1 = substr($year1, -2);
    $month = date("m");
  	$day = date("d");
    $characters = '1234567890abcdefghijklmnopqrstuvwxyz';

    $random_string = $year1;

    for ($i = 0; $i < 8; $i++) {
        if (i == 2) {
            $random_string .= $month;
        } else if (i == 5) {
            $random_string .= $day;
        } else {
            $random_string .= $characters[wp_rand(0, strlen($characters))];
        }
    }
  
    return '<input type="hidden" name="rand_string" value="' . strtoupper($random_string) . '" />';
}