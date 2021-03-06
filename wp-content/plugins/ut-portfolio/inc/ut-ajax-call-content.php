<?php

/*
 * Portfolio Management by United Themes
 * http://www.unitedthemes.com/
 */

/*
|--------------------------------------------------------------------------
| returns protfolio content
|--------------------------------------------------------------------------
*/
if ( ! function_exists( 'ut_get_portfolio_post_content' ) ) :

	function ut_get_portfolio_post_content() {
		
        global $post;
                
		/* get portfolio id */
		$portfolio_id = (int)$_POST[ 'portfolio_id' ];
		
        $the_content = NULL;
        
		/* get post object */
		$post = get_post( $portfolio_id , OBJECT );
        
        setup_postdata( $post );
        
		/* get post format */
		$post_format = get_post_format( $portfolio_id );	
		
        /* try to catch video url */
		$video_url = ut_get_portfolio_format_video_content( get_the_content() );	
        
        /* modify content ( fallback to old version ) */
        if( $post_format == 'video') {
        
            $the_content = str_replace( $video_url , "" , get_the_content() );
			$the_content = apply_filters( 'the_content' , $the_content );
        
        } elseif( $post_format == 'gallery') {
        
            $the_content = preg_replace( '/(.?)\[(gallery)\b(.*?)(?:(\/))?\](?:(.+?)\[\/\2\])?(.?)/s', '$1$6', get_the_content() );
			$the_content = apply_filters( 'the_content' , $the_content );        
            
        } else {
            
            $the_content = apply_filters( 'the_content' , get_the_content() );
            
        }
        
        $post_content = '<h2 class="ut-portfolio-title">' . get_the_title($portfolio_id) . '</h2>';
        $post_content .= $the_content;
        
        wp_reset_postdata( $post );
                        	
		echo $post_content;
		
        die(1);
		
	}

endif;

add_action( 'wp_ajax_nopriv_ut_get_portfolio_post_content', 'ut_get_portfolio_post_content' );
add_action( 'wp_ajax_ut_get_portfolio_post_content', 'ut_get_portfolio_post_content' ); ?>