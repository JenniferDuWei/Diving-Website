<?php
/*
Template Name: Gallery
*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<title>South China Dive Club | Scuba Diving in Hong Kong</title>
<!-- Meta Tags -->
    <meta name="">
    <meta name="robots" content="noindex, nofollow">
<!-- CSS, JS and Analytics Loading -->
	<?php get_template_part('loading'); ?>
    <?php get_template_part('mail'); ?>
</head>
<body>
<?php get_header(); ?>
<div class="alldivs">
	<div class="background"></div>
    <!-- header -->
    <div class="header box_shadows">
        <div class="center_align">
            <div class="header_container">
            	<div class="header_spacer"></div>
            	<div class="header_bsac">
                	<div class="header_bsac_pic">
                    	<img src="<?php bloginfo('template_url'); ?>/images/bsac_logo_SCDC.png" width="100%" height="100%">
                    </div>
                </div>
                <div class="header_social">
                    <div class="header_social_buttons_container"> 
                    	<a href="https://www.facebook.com/groups/scdc1097" target="_blank">
                        <div class="header_social_buttons">
                            <div class="Ssocial">
                                <img class="spacer" alt="" src="<?php bloginfo('template_url'); ?>/images/Social_spacer.png">
                                <img class="sprite" alt="" src="<?php bloginfo('template_url'); ?>/images/social_icons_SCDC.jpg">
                            </div>
                        </div>
                        </a>
                        <div class="header_social_button_sapcer"></div>
                        <div class="header_social_buttons">
                            <div class="Ssocial">
                                <img class="spacer" alt="" src="<?php bloginfo('template_url'); ?>/images/Social_spacer.png">
                                <img class="sprite s2" alt="" src="<?php bloginfo('template_url'); ?>/images/social_icons_SCDC.jpg">
                            </div>
                        </div>
                        <div class="header_social_button_sapcer"></div>
                        <div class="header_social_buttons">
                            <div class="Ssocial">
                                <img class="spacer" alt="" src="<?php bloginfo('template_url'); ?>/images/Social_spacer.png">
                                <img class="sprite s3" alt="" src="<?php bloginfo('template_url'); ?>/images/social_icons_SCDC.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_logo">
                	<img src="<?php bloginfo('template_url'); ?>/images/SCDC_logo.png" width="100%" height="100%">
                </div>
                <div class="header_text">
                	South China<br>
                    <span class="header_text_large">Dive Club</span>
                </div>
                <div class="header_spacer"></div>
            </div>
         </div>
    </div>
    <!-- main content -->
    <div class="main_content box_shadows_small">
    	<div class="main_content_background">
    		<div class="main_content_background_filter"></div>
        </div>
    	<div class="center_align">
        <div class="expand_containers">
            	<div class="main_spacer"></div>
            	<div class="expand_encasulation box_shadows_normal">
                    <div class="expand_top">
                    	<a href="http://www.scdc.name">
                        <div class="expand_close">
                        	<img src="<?php bloginfo('template_url'); ?>/images/close_button.png" width="100%" height="100%">
                        </div>
                        </a>
                    </div>
                    <div class="expand_bottom">
                    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php the_content(); ?><?php endwhile; endif; ?>
                    </div>
                 </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="footer">
	<div class="center_align">
    	<div class="footer_text">
        	All rights reserved 2014<br>
        	<div class="footer_text_small">Designed by <a href="http://www.akapumkin.com">AKAstudios</a></div>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>