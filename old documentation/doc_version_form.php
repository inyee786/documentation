<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" style="margin:0 !important;"<?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" style="margin:0 !important;"<?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" style="margin:0 !important;"<?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html style="margin:0 !important;" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
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
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>

<![endif]-->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ad-gallery.pack.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ad-gallery.js" type="text/javascript"></script>
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

  <script type="text/javascript">
  $(function() {
  
/*    $('img.image1').data('ad-desc', 'Whoa! This description is set through elm.data("ad-desc") instead of using the longdesc attribute.<br>And it contains <strong>H</strong>ow <strong>T</strong>o <strong>M</strong>eet <strong>L</strong>adies... <em>What?</em> That aint what HTML stands for? Man...');
*//*    $('img.image1').data('ad-title', 'Title through $.data');
    $('img.image4').data('ad-desc', 'This image is wider than the wrapper, so it has been scaled down');
    $('img.image5').data('ad-desc', 'This image is higher than the wrapper, so it has been scaled down');
*/
    var galleries = $('.ad-gallery').adGallery();
    $('#switch-effect').change(
      function() {
        galleries[0].settings.effect = $(this).val();
        return false;
      }
    );
    $('#toggle-slideshow').click(
      function() {
        galleries[0].slideshow.toggle();
        return false;
      }
    );
    $('#toggle-description').click(
      function() {
        if(!galleries[0].settings.description_wrapper) {
          galleries[0].settings.description_wrapper = $('#descriptions');
        } else {
          galleries[0].settings.description_wrapper = false;
        }
        return false;
      }
    );
  });
  </script>

  <!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#menu" ).menu({ position: { my: "left top", at: "right-40 top+20" } });
  });
  </script>-->

</head>

<body <?php body_class(); ?>>
<div id="main-Wrapper">

	<div id="header-Wrapper">
<div class="logo"><!--<a href="<?php echo home_url(); ?>">-->
<a href="http://www.cloudbyte.com/" target="_blank">
<img src="http://www.docs.cloudbyte.com/wp-content/uploads/logo-new.png"  alt="Cloudbyte logo" longdesc="http://cloudbyte.com" /></a><span><?php bloginfo( 'description' ); ?></span></div>



<ul id="menu">
    
    <li><a href="#" class="drop">Login</a><!-- Begin Home Item -->
    
        <div class="dropdown_2columns"><!-- Begin 2 columns container -->
    
            <div class="col_2">
<?php dynamic_sidebar( 'sidebar-6' ); ?>
            </div>
          
        </div><!-- End 2 columns container -->
    
    </li><!-- End Home Item -->


</ul>

<?php get_search_form(); ?>

    </div>

<div id="dokuPrimeNav">  
 <?php //wp_nav_menu($args); 

wp_nav_menu( array('menu' => 'Primary Menu' ));
?> 

<div style="padding:10px;background:#f1f1f1;">

<h3>Select ElastiStor Version:</h3>
<form action="/cloudbyte-elastistor-overview/
" method="post"  onsubmit="return false">
                  
                                        <select name="version" style="width:100px;">
                                            <option>1.4.X</option>
                                            <option>2.X</option>
                                        </select>
                                  
                           
                                <input type="submit" value="Submit" style="width:70px;"/>
                                
                            
                        </form>

</div>







    </div>
 	<!--dokuPrimeNav top navigation container ends here-->        

    <div id="body-Wrapper">

<div id="dokuLeftNav">
<?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>

 		<!--dokuLeftNav left navigation container ends here--> 