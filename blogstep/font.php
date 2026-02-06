<?php
/*--------------------------------------------------------------------*/
/*     Register Google Fonts
/*--------------------------------------------------------------------*/

function blogstep_fonts_url() {
	
    $fonts_url = '';
		
    $font_families = array();
 
	$font_families = array('Urbanist:300,400,500,600,700,800,900|DM Sans:400,500,700');
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

    return $fonts_url;
}
function blogstep_scripts_styles() {
    wp_enqueue_style( 'blogstep-fonts', blogstep_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'blogstep_scripts_styles' );