<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Noah Studio <?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="<?php echo esc_url(get_bloginfo('stylesheet_url')); ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/img/Favicon.png'); ?>" type="image/png">
</head>
	
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B2F7WPQ9CG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-B2F7WPQ9CG');
</script>
	
<body <?php body_class(); ?>>

<div class="container text-center pt-5 pb-2" id="header"><!--Header-->

    <a href="<?php echo home_url(); ?>/" class="home-link">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/LogoNS_small_color.png'); ?>" alt="Logo" class="img-fluid">
    </a>         
    
    <nav class="navbar navbar-expand">
        <div class="container justify-content-center p-3">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon border-0"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center p-3" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item <?php echo (is_page(9)) ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo get_permalink(9); ?>">About</a>
                    </li>
                    <li class="nav-item dropdown <?php echo (is_page(array(21, 13, 23, 15)) || in_category(array('illustration', 'animation', 'design', 'books'))) && !is_front_page() ? 'active' : ''; ?>">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Projects</a>
					<ul class="dropdown-menu">
						<li class="dropdown-item <?php echo (is_page(21) || in_category('illustration')) && !is_front_page() ? 'active' : ''; ?>">
							<a href="<?php echo get_permalink(21); ?>">Illustration</a>
						</li>
						<li class="dropdown-item <?php echo (is_page(13) || in_category('animation')) && !is_front_page() ? 'active' : ''; ?>">
							<a href="<?php echo get_permalink(13); ?>">Animation</a>
						</li>                                
						<li class="dropdown-item <?php echo (is_page(23) || in_category('design')) && !is_front_page() ? 'active' : ''; ?>">
							<a href="<?php echo get_permalink(23); ?>">Design</a>
						</li>
						<li class="dropdown-item <?php echo (is_page(15) || in_category('books')) && !is_front_page() ? 'active' : ''; ?>">
							<a href="<?php echo get_permalink(15); ?>">Books</a>
						</li>
					</ul>
                                             
                    </li>                                                                                                         
                    <li class="nav-item <?php echo (is_page(17)) ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo get_permalink(17); ?>" id="contact-link">Contact</a>
                    </li>
					<?php
						$parent_id = 19; // Set the parent page ID
						$current_page_id = get_the_ID(); // Get the current page ID

						// Check if the current page is the parent or any of its child pages
						$is_active = ($current_page_id == $parent_id) || ($parent_id && ($parent_id == wp_get_post_parent_id($current_page_id)));

						// Add the 'active' class if the page or any of its child pages are active
						$active_class = $is_active ? 'active' : '';
					?>
					<li class="nav-item <?php echo $active_class; ?>">
						<a class="nav-link" href="<?php echo get_permalink($parent_id); ?>" rel="noopener">Store</a>
					</li>
                    <li class="nav-item external-link pe-1">
                        <a class="nav-link" href="https://noahmiller.space" target="_blank" rel="noopener">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>                         
</div><!--End Header-->