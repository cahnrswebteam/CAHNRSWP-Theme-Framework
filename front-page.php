<?php

$html = apply_filters('cahnrs_framework_front_page_replace_html' , '');

if ( $html ) {
	
	return $html;
	
} else {
	
	ob_start();
	
	do_action('cahnrs_framework_front_page_before_html');
	
	get_header();

    echo '<main class="spine-page-default">';
	
		do_action('cahnrs_framework_front_page_after_main_html');

		get_template_part( 'parts/headers' );
		
		do_action('cahnrs_framework_front_page_after_headers_html');
		
		get_template_part( 'parts/featured-images' );
		
		do_action('cahnrs_framework_front_page_after_featured_images_html');
		
		while ( have_posts() ) {
			
			 the_post();
			 
			 get_template_part( 'articles/article' );
			 
			 do_action('cahnrs_framework_front_page_after_article_html' , $post );
			 
		} // end while
		
		do_action('cahnrs_framework_front_page_after_loop_html');
		
		get_template_part( 'parts/footers' );
		
		do_action('cahnrs_framework_front_page_after_footers_html');

	echo '</main>';
	
	do_action('cahnrs_framework_front_page_after_content_html');

	get_footer();
	
	do_action('cahnrs_framework_front_page_after_footer_html');
	
	$html .= ob_get_clean();
	
	echo apply_filters('cahnrs_framework_front_page_after_html' , $html);
	
} // end if $html
