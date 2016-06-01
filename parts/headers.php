<?php

$html = apply_filters('cahnrs_framework_header_replace_html' , '' );

if ( $html ){
	
	echo $html;
	
}  else {
	
	ob_start();
	
	do_action('cahnrs_framework_header_before_html');
	
	echo '<header id="global-header">';
	
		do_action( 'cahnrs_framework_header_before_content' );
	
		echo '<div class="content-wrap">';
		
			do_action( 'cahnrs_framework_header_content_before' );
		
			$logo_html = '<a class="primary-logo text">';
				
				$logo_html .= apply_filters( 'cahnrs_framework_header_logo_inner_html' , 'College of Agricultural Human, and Natural Resource Sciences' );
			
			$logo_html .= '</a>';
			
			echo apply_filters( 'cahnrs_framework_header_logo_html' , $logo_html );
			
			$action_nav_html = '<nav class="site-actions">';
			
				$action_nav_html .= '<a href="http://cahnrs.wsu.edu/academics/prospective/">Request Info</a> | <a href="http://admission.wsu.edu/applications/index.html">Apply</a> | <a href="https://secure.wsu.edu/give/default.aspx?fund=7593">Give</a>';
			
			$action_nav_html .= '</nav>';
			
			echo apply_filters( 'cahnrs_framework_header_action_nav_html' , $action_nav_html);
			
			do_action( 'cahnrs_framework_header_content_after' );
		
		echo '</div>';
		
		do_action( 'cahnrs_framework_header_after_content' );
	
	echo '</header>';
	
	$html .= ob_get_clean();
	
	echo apply_filters('cahnrs_framework_header_after_html' , $html );
	
} // end if