<?php
/*
* Plugin Name: Catalogue Plugin 
* Plugin URI: http://localhost/storyscaping/catalogueplugin
* Description: This is a Catalogue Download form Plugin for ReGrow based on HTML5, CSS, JS and PHP
* Version: 1.3.2
* Author: Group 6
* Author URI: http://localhost/storyscaping
* License: GPL2
*/

function catalogue_form()
{
    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
  	$content .= '<section>';
    $content .= '<img id="logo" src="http://storyscaping.dees.design/wp-content/plugins/catalogueplugin/img/regrow-logo-white.svg" alt="ReGrow logo"> ';
 	$content .= '<h5 id="headline">Are your company interested in collaborating with ReGrow?</h5>';
  	$content .= '<h5 id="tilmeld">Download our catalogue and let us introduce our 100% sustainable pot. Let us explain why it is important for your company to get green, and how we can help with that. 
</h5>';
  	$content .= '</section>';
    $content .= '<section class="form">';
    $content .= '<form action="#" id="myForm">';
    $content .= '<input type="button" value="DOWNLOAD OUR CATALOGUE" name="downloadBtn" id="downloadBtn">';
    $content .= '<div class="inputcontainer">';
    $content .= '<div>';
    $content .= '<h5 id="contactus">OR CONTACT US</h5>';
    $content .= '<h5 id="contactus_text">Do you have any specific questions? Feel free to contact us directly!</h5>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="text" name="name" id="name" placeholder="Your name" required><br>';
    $content .= '<input type="email" name="email" id="email" placeholder="E-mail address" required><br>';
    $content .= '<input type="text" name="company" id="company" placeholder="Company name" required><br>';
    $content .= '<input type="tel" name="phone" id="phone" placeholder="Phone number" required>';
    $content .= '</div>';
    $content .= '</div>';
  	$content .= '<div>';
 	$content .= '<input type="submit" value="CONTACT US" name="submitBtn" id="submitBtn2">';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
  	$content .= '</div>';
    return $content;
}

    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_catalogue','catalogue_form');
    
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin2');
    

    function register_styles_and_scripts_for_plugin2() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        
        
        wp_enqueue_style('CustomStylesheet', plugins_url('catalogueplugin/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('catalogueplugin/js/script.js'), array('jquery'), null, true);
    }


