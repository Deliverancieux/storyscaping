<?php
/*
* Plugin Name: Newsletter Plugin 
* Plugin URI: http://localhost/storyscaping/newsletterplugin
* Description: This is a Newsletter Signup form Plugin for ReGrow based on HTML5, CSS, JS and PHP
* Version: 1.1.0
* Author: Group 6
* Author URI: http://localhost/storyscaping
* License: GPL2
*/

function newsletter_form()
{
    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
  	$content .= '<section>';
    $content .= '<img id="logo" src=" '.plugins_url("newsletterplugin/img/logo.svg").' " ';
    $content .= 'alt="Cheers Logo">';
  	$content .= '<h5 id="tilmeld">Want to live your everyday life more sustainably? Let us serve you the latest news in connection with eco -friendly lifestyle: Tips & Tricks straight into your mailbox!</h5>';
  	$content .= '</section>';
    $content .= '<section class="form">';
    $content .= '<form action="#" id="myForm">';
    $content .= '<div class="input">';
    $content .= '<input type="text" name="name" id="name" placeholder="Your name" required><br>';
    $content .= '<input type="email" name="email" id="email" placeholder="E-mail address" required>';
    $content .= '</div>';
  	$content .= '<div>';
 	$content .= '<input type="submit" value="SUBSCRIBE NOW" name="submitBtn" id="submitBtn2">';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
  	$content .= '</div>';
    return $content;
}

    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_newsletter','newsletter_form');
    
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');
    

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        
        
        wp_enqueue_style('CustomStylesheet', plugins_url('newsletterplugin/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('newsletterplugin/js/script.js'), array('jquery'), null, true);
    }


