<?php

// ---------------------------- Thumbnail

add_theme_support('post-thumbnails');

// Custom Login
function custom_login_logo() {
    echo '<style type="text/css">
        .login h1 a {
            background-image: url('.get_stylesheet_directory_uri().'/img/LogoNS_small_color.png);
            background-size: contain;
            width: 200px;
            /* Hide the text */
            text-indent: -9999px;
            overflow: hidden;
            display: block;
            /* Ensure proper accessibility */
            position: relative;
        }
    </style>';
    // Change the login logo URL
    echo '<script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            var loginLogoLink = document.querySelector(".login h1 a");
            if (loginLogoLink) {
                loginLogoLink.href = "'.home_url().'"; // Replace with your desired URL
            }
        });
    </script>';
}
add_action('login_head', 'custom_login_logo');

?>