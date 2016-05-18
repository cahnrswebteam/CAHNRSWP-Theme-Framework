<?php

$html = apply_filters('cahnrs_framework_featured_image_replace_html' , '' );

if ( $html ){
	
	echo $html;
	
}  else {
	
	ob_start();
	
	do_action('cahnrs_framework_featured_image_before_html');

	$html .= ob_get_clean();
	
	echo apply_filters('cahnrs_framework_featured_image_after_html' , $html );
	
} // end if

