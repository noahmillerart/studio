<?php
get_header();

global $post;
$page_slug = $post->post_name;

if ($page_slug == 'about') {
    get_template_part('about');
} elseif ($page_slug == 'contact') {
    get_template_part('contact');
} elseif ($page_slug == 'illustration') {
    get_template_part('illustration');
} elseif ($page_slug == 'animation') {
    get_template_part('animation');
} elseif ($page_slug == 'design') {
    get_template_part('design');
} elseif ($page_slug == 'books') {
    get_template_part('books');
} elseif ($page_slug == 'store') {
?>

	<div class="container-md">
		<div class="row">
			<div class="col-md-8 pb-5">
				
				<?php
					$page = get_page_by_path('store');

					if ($page) {
						echo apply_filters('the_content', $page->post_content);
					} else {
						echo '<p>Page not found.</p>';
					}
				?>
				
			</div>
			
			<div class="col-md-4 pb-5 storelinks">
 				<?php get_template_part('storelinks'); ?>
			</div>
			
		</div>
	</div>

<?php } elseif ($page_slug == '3d-redesign') { ?>

	<div class="container-md">
		<div class="row">
			<div class="col-md-8 pb-5">
				<?php
					$page = get_page_by_path('store/3d-redesign');

					if ($page) {
						echo apply_filters('the_content', $page->post_content);
					} else {
						echo '<p>Page not found.</p>';
					}
				?>
			</div>
			
			<div class="col-md-4 pb-5 storelinks">
 				<?php get_template_part('storelinks'); ?>
			</div>
			
		</div>
	</div>

<?php } elseif ($page_slug == '3d-medieval-assets') { ?>

	<div class="container-md">
		<div class="row">
			<div class="col-md-8 pb-5">
				<?php
					$page = get_page_by_path('store/3d-medieval-assets');

					if ($page) {
						echo apply_filters('the_content', $page->post_content);
					} else {
						echo '<p>Page not found.</p>';
					}
				?>
			</div>
			
			<div class="col-md-4 pb-5 storelinks">
 				<?php get_template_part('storelinks'); ?>
			</div>
			
		</div>
	</div>

<?php	
} else {
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/content', 'page');
    endwhile;
}

get_footer();
?>