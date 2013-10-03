<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<!--
###/ 
##/
#/
/
    This inception of the AKRON / FAMILY site was completed in our fair year of 2011- the beginning of it. This work was done by Kenneth M. Piekarski (more info: http://slashedtires.com/cv), who was comissioned by the band to develop it. Design direction was made by A / F, implementation by Kenneth.
\
#\
##\
###\   
-->





<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="description" content="<?php get_bloginfo( 'description', 'display' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!-- iPad Stylesheet --> 
<link rel="stylesheet" media="only screen and (max-device-width: 1024px)" href="http://akronfamily.com/wp-content/themes/akronfamily/ipad.css" type="text/css" /> 
<!-- iPhone Stylesheet --> 
<link rel="stylesheet" media="only screen and (max-device-width: 480px)" href="http://akronfamily.com/wp-content/themes/akronfamily/iphone.css" type="text/css" /> 
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<style>


</style>
</head>

<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed">
					<div id="page_title">
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</div>
	<div id="header">
    
			<div id="branding" role="banner">
				
			</div><!-- #branding -->
				<div id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
                
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				</div><!-- #access -->

			
            
	</div><!-- #header -->

	<div id="main">
