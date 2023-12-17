<?php

/**
 * Plugin Name: My SCSS Plugin
 * Description: A plugin to handle SCSS files and compile them to CSS.
 * Version: 1.0
 * Author: Your Name
 **/

// Function to create a new SCSS file in the 'scss' directory
function create_scss_file($filename)
{
    $scss_dir = plugin_dir_path(__FILE__) . 'scss/';

    // Create the 'scss' directory if it doesn't exist
    if (!file_exists($scss_dir)) {
        mkdir($scss_dir, 0755, true);
    }

    $file_path = $scss_dir . $filename;

    // Check if file already exists to prevent overwriting
    if (!file_exists($file_path)) {
        $file = fopen($file_path, 'w');
        fwrite($file, "// SCSS content for " . $filename . "\n");
        fclose($file);
    }
}

// Enqueue the compiled CSS file
function my_scss_enqueue_styles()
{
    wp_enqueue_style('my-scss-style', plugin_dir_url(__FILE__) . 'css/style.css');
}
add_action('wp_enqueue_scripts', 'my_scss_enqueue_styles');

// Example usage of create_scss_file function
// Uncomment the line below to test creating a new SCSS file
// create_scss_file('example.scss');


// CSS Files
function enqueue_fontawesome_styles()
{
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '5.15.4');
}

add_action('wp_enqueue_scripts', 'enqueue_fontawesome_styles');