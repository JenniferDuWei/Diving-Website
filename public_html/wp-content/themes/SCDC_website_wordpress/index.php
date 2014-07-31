<!DOCTYPE html>
<html lang=”en”>
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
                <!-- Social Buttons -->
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
                <!-- SCDC text -->
                <div class="header_text text_shadow">
                    <br>
                    
                </div>
                <!-- SCDC logo -->
                <div class="header_logo">
                    <img src="<?php bloginfo('template_url'); ?>/images/SCDC_logo.png" width="100%" height="100%">
                </div>   
                <div class="header_spacer"></div>
            </div>
         </div>
    </div>
    <!-- main body -->
    <div class="main_content box_shadows_small">
    	<div class="main_content_background">
    		<div class="main_content_background_filter"></div>
        </div>
    	<div class="center_align">
        	<div class="carousel_container">
        	<!-- Carousel 1 -->
            <div id="carousel1" class="carousel ">
                <div class="main_containers">
                	<div class="main_spacer"></div>
                    <div class="main_top">
                   		<div class="main_sections_container_spacer main_section_no_spacer"></div>
                        <!-- About us -->
                    	<div class="main_section_containers box_shadows_normal">
                        	<div class="main_section_spacer_top"></div>
                            <div class="main_section_encapsulation">
                            	<div class="main_section_spacer_left"></div>
                                <div class="main_section_left">
                                	<div class="main_section_text">
                                    	<?php if ( !dynamic_sidebar(about_text) ) : ?><?php endif; ?>
                                	</div>
                                </div>
                                <div class="main_section_right">
                                	<div class="main_section_picture box_shadows_picture">
                                    	<div class="main_section_picture">
                                    		<img src="<?php bloginfo('template_url'); ?>/images/pic_1_about.jpg" width="100%" height="100%">
                                        </div>
                                    </div>
                                    <div class="main_section_expand">
                                        <div id="about_expand_button" class="main_expand_button">
                                            <img src="<?php bloginfo('template_url'); ?>/images/expand icon.png" width="100%" height="100%">
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                        <div class="main_sections_container_spacer"></div>
                        <!-- What we do -->
                        <div class="main_section_containers box_shadows_normal">
                        	<div class="main_section_spacer_top"></div>
                            <div class="main_section_encapsulation">
                            	<div class="main_section_spacer_left"></div>
                                <div class="main_section_left">
                                <div class="main_section_text">
                                	<?php if ( !dynamic_sidebar(what_text) ) : ?><?php endif; ?>
                                	</div>
                                </div>
                                <div class="main_section_right">
                                	<div class="main_section_picture box_shadows_picture">
                                    	<img src="<?php bloginfo('template_url'); ?>/images/pic_1_social.jpg" width="100%" height="100%">
                                    </div>
                                    <div class="main_section_expand">
                                        <div id="what_expand_button" class="main_expand_button">
                                            <img src="<?php bloginfo('template_url'); ?>/images/expand icon.png" width="100%" height="100%">
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                    <div class="main_spacer"></div>
                    <div class="main_bottom">
                    	<div class="main_sections_container_spacer main_section_no_spacer"></div>
                        <!-- Contact us -->
                    	<div class="main_section_containers box_shadows_normal">
                        	<div class="main_section_spacer_top"></div>
                            <div class="main_section_encapsulation">
                            	<div class="main_section_spacer_left"></div>
                                <div class="main_section_left">
                                	<div class="main_section_text">
                                		<?php if ( !dynamic_sidebar(contact_text) ) : ?><?php endif; ?>
                                	</div>
                                </div>
                                <div class="main_section_right">
                                	<div class="main_section_picture box_shadows_picture">
                                    	<img src="<?php bloginfo('template_url'); ?>/images/pic_1_contact.jpg" width="100%" height="100%">
                                    </div>
                                    <div class="main_section_expand">
                                        <div id="contact_expand_button" class="main_expand_button">
                                            <img src="<?php bloginfo('template_url'); ?>/images/expand icon.png" width="100%" height="100%">
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                        <div class="main_sections_container_spacer"></div>
                        <!-- Our Sponsors -->
                        <div class="main_section_containers box_shadows_normal">
                        	<div class="sponsor_container">
                            	<div class="sponsor_text">Our Partners</div>
                                <div id="sponsor_slide" class="flexslider">
                                    <ul class="slides">
                                    <!-- sponsors MD and scoty -->
                                    <li>
                                    <a href="http://www.mandarin-divers.com" target="_blank">
                                    <div class="sponsor_top box_shadows_picture">
                                        <img src="<?php bloginfo('template_url'); ?>/images/Sponsor_1.jpg" width="100%" height="100%">
                                    </div>
                                    </a>
                                    <a href="http://www.divescotty.com" target="_blank">
                                    <div class="sponsor_spacer"></div>
                                    <div class="sponsor_top box_shadows_picture">
                                        <img src="<?php bloginfo('template_url'); ?>/images/Sponsor_2.jpg" width="100%" height="100%">
                                    </div>
                                    </a>
                                    </li>
                                    <!-- Sponsors Lagna beach club and Diving adventure -->
                                    <li>
                                    <a href="http://www.llbc.com.ph/" target="_blank">
                                    <div class="sponsor_top box_shadows_picture">
                                        <img src="<?php bloginfo('template_url'); ?>/images/Sponsor_3.jpg" width="100%" height="100%">
                                    </div>
                                    </a>
                                    <a href="http://www.divinghk.com/index_en.php" target="_blank">
                                    <div class="sponsor_spacer"></div>
                                    <div class="sponsor_top box_shadows_picture">
                                        <img src="<?php bloginfo('template_url'); ?>/images/Sponsor_4.jpg" width="100%" height="100%">
                                    </div>
                                    </a>
                                    </li>
                                    <!-- Dan asia pacific and Pro dive -->
                                    <li>
                                    <a href="http://www.prodive.com.hk/en/index.asp" target="_blank">
                                    <div class="sponsor_top box_shadows_picture">
                                        <img src="<?php bloginfo('template_url'); ?>/images/Sponsor_5.jpg" width="100%" height="100%">
                                    </div>
                                    </a>
                                    <a href="http://www.danasiapacific.org/" target="_blank">
                                    <div class="sponsor_spacer"></div>
                                    <div class="sponsor_top box_shadows_picture">
                                        <img src="<?php bloginfo('template_url'); ?>/images/Sponsor_6.jpg" width="100%" height="100%">
                                    </div>
                                    </a>
                                    </li>
                                    <!-- HK underwater club -->
                                    <li>
                                    <a href="http://www.hkuc.org.hk" target="_blank">
                                    <div class="sponsor_top box_shadows_picture">
                                        <img src="<?php bloginfo('template_url'); ?>/images/Sponsor_7.jpg" width="100%" height="100%">
                                    </div>
                                    </a>
                                  
                                    </li>
                                	</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="arrow_forward" class="main_arrow">
                	<div class="main_arrow_picture">
                    	<img src="<?php bloginfo('template_url'); ?>/images/arrow_forward.png" width="100%" height="100%">
                    </div>
                    <div class="main_arrow_picture2">
                    	<img src="<?php bloginfo('template_url'); ?>/images/arrow_forward.png" width="100%" height="100%">
                    </div>
                </div>
            </div>
            <!-- Carousel 2 -->
            <div id="carousel2" class="carousel ">
                <div id="arrow_back" class="main_arrow">
                    <div class="main_arrow_picture">
                    	<img src="<?php bloginfo('template_url'); ?>/images/arrow_back.png" width="100%" height="100%">
                    </div>
                      <div class="main_arrow_picture2">
                    	<img src="<?php bloginfo('template_url'); ?>/images/arrow_back.png" width="100%" height="100%">
                    </div>
                </div>
                <div class="main_containers">
                	<div class="main_spacer"></div>
                    <div class="main_top">
                    	<div class="main_sections_container_spacer main_section_no_spacer"></div>
                        <!-- FAQ -->
                    	<div class="main_section_containers box_shadows_normal">
                        	<div class="main_section_spacer_top"></div>
                            <div class="main_section_encapsulation">
                            	<div class="main_section_spacer_left"></div>
                                <div class="main_section_left">
                                	<div class="main_section_text">
                                		<?php if ( !dynamic_sidebar(FAQ_text) ) : ?><?php endif; ?>
                                    </div>
                                </div>
                                <div class="main_section_right">
                                	<div class="main_section_picture box_shadows_picture">
                                    	<img src="<?php bloginfo('template_url'); ?>/images/pic_1_FAQ.jpg" width="100%" height="100%">
                                    </div>
                                    <div class="main_section_expand">
                                        <div id="FAQ_expand_button" class="main_expand_button">
                                            <img src="<?php bloginfo('template_url'); ?>/images/expand icon.png" width="100%" height="100%">
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                        <div class="main_sections_container_spacer"></div>
                        <!-- Gallery -->
                        <div class="main_section_containers box_shadows_normal">
                        	<div class="main_section_spacer_top"></div>
                            <div class="main_section_encapsulation">
                            	<div class="main_section_spacer_left"></div>
                                <div class="main_section_left">
                                    <div class="main_section_text">
                                    	 <?php if ( !dynamic_sidebar(media_text) ) : ?><?php endif; ?>
                                    </div> 
                                </div>
                                <div class="main_section_right">
                                	<div class="main_section_picture box_shadows_picture">
                                    	<img src="<?php bloginfo('template_url'); ?>/images/pic_1_gallery.jpg" width="100%" height="100%">
                                    </div>
                                    <div class="main_section_expand">
                                    	<a href="gallery">
                                        <div class="main_expand_button">
                                            <img src="<?php bloginfo('template_url'); ?>/images/expand icon.png" width="100%" height="100%">
                                        </div>
                                        </a>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                    <div class="main_spacer"></div>
                    <div class="main_bottom">
                    	<div class="main_sections_container_spacer main_section_no_spacer"></div>
                        <!-- Schedule -->
                    	<div class="main_section_containers box_shadows_normal">
                        	<div class="main_section_spacer_top"></div>
                            <div class="main_section_encapsulation">
                            	<div class="main_section_spacer_left"></div>
                                <div class="main_section_left">
                                    <div class="main_section_text">
                                         <?php if ( !dynamic_sidebar(schedule_text) ) : ?><?php endif; ?>
                                    </div>
                                </div>
                                <div class="main_section_right">
                                	<div class="main_section_picture box_shadows_picture">
                                    	<img src="<?php bloginfo('template_url'); ?>/images/pic_1_shcedule.jpg" width="100%" height="100%">
                                    </div>
                                    <div class="main_section_expand">
                                        <div id="schedule_expand_button" class="main_expand_button">
                                            <img src="<?php bloginfo('template_url'); ?>/images/expand icon.png" width="100%" height="100%">
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                        <div class="main_sections_container_spacer"></div>
                        <!-- Comity -->
                        <div class="main_section_containers box_shadows_normal">
                        	<div class="main_section_spacer_top"></div>
                            <div class="main_section_encapsulation">
                            	<div class="comity_container">
                            		<div class="sponsor_text">Our Committee</div>
                                    <div class="comity_top">
                                        <div id="comity_slide" class="flexslider">
                                        <ul class="slides">
                                        <li>
                                            <!-- Slider 1-->
                                            <div class="comity_picture box_shadows_normal">
                                                <img src="<?php bloginfo('template_url'); ?>/images/comity/Andy_Carter.jpg" width="100%" height="100%">
                                            </div>
                                            <div class="comity_spacer"></div>
                                            <div class="comity_picture box_shadows_normal">
                                                <img src="<?php bloginfo('template_url'); ?>/images/comity/Mark_kelly.jpg" width="100%" height="100%">
                                            </div>
                                        </li>
                                        <li>
                                            <!-- Slider 2 -->
                                            <div class="comity_picture box_shadows_normal">
                                                <img src="<?php bloginfo('template_url'); ?>/images/comity/Andy_nivin.jpg" width="100%" height="100%">
                                            </div>
                                            <div class="comity_spacer"></div>
                                            <div class="comity_picture box_shadows_normal">
                                                <img src="<?php bloginfo('template_url'); ?>/images/comity/Mike_belshaw.jpg" width="100%" height="100%">
                                            </div>
                                        </li>
                                        <li>
                                            <!-- Slider 3 -->
                                            <div class="comity_picture box_shadows_normal">
                                                <img src="<?php bloginfo('template_url'); ?>/images/comity/Jo_Robberts.jpg" width="100%" height="100%">
                                            </div>
                                            <div class="comity_spacer"></div>
                                            <div class="comity_picture box_shadows_normal">
                                                <img src="<?php bloginfo('template_url'); ?>/images/comity/Rob_Cristie.jpg" width="100%" height="100%">
                                            </div>
                                        </li>
                                        <li>
                                            <!-- Slider 4-->
                                            <div class="comity_picture box_shadows_normal">
                                                <img src="<?php bloginfo('template_url'); ?>/images/comity/Ronda_Colman.jpg" width="100%" height="100%">
                                            </div>
                                            <div class="comity_spacer"></div>
                                            <div class="comity_picture box_shadows_normal">
                                                <img src="<?php bloginfo('template_url'); ?>/images/comity/Jenifer_duWei.jpg" width="100%" height="100%">
                                            </div>
                                        </li>
                                        </ul>
                                        </div>
									</div>
                                   	<div class="comity_btm">
                                        <div id="comity_expand_button" class="main_expand_button reduce_top">
                                            <img src="<?php bloginfo('template_url'); ?>/images/expand icon.png" width="100%" height="100%">
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- About us expanded -->
            <div id="about" class="expand_containers">
            	<div class="main_spacer"></div>
            	<div class="expand_encasulation box_shadows_normal">
                    <div class="expand_top">
                        <div class="expand_close">
                        	<img src="<?php bloginfo('template_url'); ?>/images/close_button.png" width="100%" height="100%">
                        </div>
                    </div>
                    <div class="expand_bottom">
                    	<div class="expand_spacer"></div>
                    	<!-- about slider -->
                    	<div class="expand_slider box_shadows_normal">
                        	<div class="flexslider">
                           		<ul class="slides">
                                	<?php if ( !dynamic_sidebar(expand_about_slider) ) : ?><?php endif; ?>
                                </ul>
                        	</div>
                        </div>
                        <div class="expand_spacer"></div>
                        <div class="about_container">
                            <div class="about_container_text">
                            <?php if ( !dynamic_sidebar(expand_about_text) ) : ?><?php endif; ?>
                            </div>
                            <div class="about_container_spacer"></div>
                            <div class="about_container_pic box_shadows_normal">
                            <?php if ( !dynamic_sidebar(expand_about_picture) ) : ?><?php endif; ?>
                            </div>
                        </div>
                    </div>
                 </div>
                 <div class="main_spacer"></div>
            </div>
            <!-- What we do expanded -->
            <div id="what" class="expand_containers">
            	<div class="main_spacer"></div>
            	<div class="expand_encasulation box_shadows_normal">
                    <div class="expand_top">
                        <div class="expand_close">
                        	<img src="<?php bloginfo('template_url'); ?>/images/close_button.png" width="100%" height="100%">
                        </div>
                    </div>
                    <div class="expand_bottom">
                    	<div class="expand_spacer"></div>
                    	<!-- about slider -->
                    	<div class="expand_slider box_shadows_normal">
                        	<div class="flexslider">
                           		<ul class="slides">
                                	<?php if ( !dynamic_sidebar(expand_what_slider) ) : ?><?php endif; ?>
                                </ul>
                        	</div>
                        </div>
                        <div class="expand_spacer"></div>
                        <div class="about_container">
                            <div class="about_container_text">
                            	<?php if ( !dynamic_sidebar(expand_what_text) ) : ?><?php endif; ?>
                            </div>
                            <div class="about_container_spacer"></div>
                            <div class="about_container_pic box_shadows_normal">
                            	<?php if ( !dynamic_sidebar(expand_what_picture) ) : ?><?php endif; ?>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            <!-- Contact expand expanded -->
            <div id="contact" class="expand_containers contact_container_small_expanded">
            	<div class="main_spacer"></div>
            	<div class="expand_encasulation contact_container_small box_shadows_normal">
                    <div class="expand_top">
                        <div class="expand_close">
                        	<img src="<?php bloginfo('template_url'); ?>/images/close_button.png" width="100%" height="100%">
                        </div>
                    </div>
                    <div class="expand_bottom">
                    	<div class="expand_container">
                            <div class="contact_top">Contact us</div>
                            <div class="contact_bottom">
                                <!-- mail -->
                                <div class="contact_mail_container">
                                <div class="Contact_box">
                				<form id="mc-form" method="POST" name="contact_form" onsubmit="showHide();" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" > 
                                <p>
                                <label for='name'>Name* :</label><br>
                                    <input type="text" class="Form_box" name="name" value='<?php echo htmlentities($name) ?>' required>
                                </p>
                                <p>
                                <label for='email'>Email* :</label><br>
                                    <input type="text" class="Form_box"  name="email" value='<?php echo htmlentities($visitor_email) ?>' required>
                                </p>
                                <p>
                                <label for='message'>Message* :</label> <br>
                                    <textarea name="message" class="Form_box" style="height:40px;" required><?php echo htmlentities($user_message) ?></textarea>
                                </p>
                                    <div style="position:relative; height:75px;">
                                        <div style="position:absolute; left:0px; top:0px;">
                                            <label for='message'>Verification:</label><br>
                                            <input id="6_letters_code" class="Form_box" style="width:115px;" name="6_letters_code" type="text" required>
                                        </div>
                                        <div style="position:absolute; left:125px; top:17px;">
                                            <a href='javascript: refreshCaptcha();'><div class="Contact_refresh_button"></div></a>
                                            <img src="<?php bloginfo('template_url'); ?>/php/captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
                                        </div>
                                    </div>
                                <input type="submit" class="Send_button" value="Send" name='submit'>
                        </form>
                        <div id='contact_form_errorloc' class='err'></div>
                        <script language="JavaScript">
                        // Code for validating the form
                        // Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
                        // for details
                        var frmvalidator  = new Validator("contact_form");
                        //remove the following two lines if you like error message box popups
                        frmvalidator.EnableOnPageErrorDisplaySingleBox();
                        frmvalidator.EnableMsgsTogether();
                        
                        frmvalidator.addValidation("name","req","Please provide your name"); 
                        frmvalidator.addValidation("email","req","Please provide your email"); 
                        frmvalidator.addValidation("email","email","Please enter a valid email address"); 
                        </script>
                        <script language='JavaScript' type='text/javascript'>
                        function refreshCaptcha()
                        {
                            var img = document.images['captchaimg'];
                            img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
                        }
                        </script>
                </div>
                                </div>
                                <div class="contact_spacer"></div>
                                <div class="contact_small">
                                    <!-- contact info -->
                                    <div class="contact_info_container">
                                    	<?php if ( !dynamic_sidebar(expand_contact_text) ) : ?><?php endif; ?>
                                    </div>
                                    <div class="contact_spacer"></div>
                                    <!-- picture -->
                                    <div class="contact_picture_container">
                                        <div class="contact_picture box_shadows_normal">
                                        	<?php if ( !dynamic_sidebar(expand_contact_picture) ) : ?><?php endif; ?>     
                                        </div>
                                        <div class="contact_google_spacer"></div>
                                        <div class="contact_google_map">
                                         <?php if ( !dynamic_sidebar(expand_contact_google) ) : ?><?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            <!-- FAQ expanded -->
            <div id="FAQ" class="expand_containers">
            	<div class="main_spacer"></div>
            	<div class="expand_encasulation box_shadows_normal">
                    <div class="expand_top">
                        <div class="expand_close2">
                        	<img src="<?php bloginfo('template_url'); ?>/images/close_button.png" width="100%" height="100%">
                        </div>
                    </div>
                    <div class="expand_bottom">
                    	<div class="expand_container">
                    		<?php if ( !dynamic_sidebar(expand_FAQ_text) ) : ?><?php endif; ?>
                        </div>
                    </div>
                 </div>
            </div>
            <!-- Schedule expanded -->
            <div id="schedule" class="expand_containers">
            	<div class="main_spacer"></div>
            	<div class="expand_encasulation box_shadows_normal">
                    <div class="expand_top">
                        <div class="expand_close2">
                        	<img src="<?php bloginfo('template_url'); ?>/images/close_button.png" width="100%" height="100%">
                        </div>
                    </div>
                    <div class="expand_bottom">
                    	<div class="expand_container">
                        	<div class="contact_top">Schedule</div>
                            <div class="google_schedule">
                            <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" src="https://www.google.com/calendar/embed?src=m9f71bhf10o6gr5hlgbafi24mg%40group.calendar.google.com&amp;ctz=Asia/Hong_Kong&amp;mode=month&amp;hl=en"></iframe><br /><small><a href="https://www.google.com/calendar/embed?src=m9f71bhf10o6gr5hlgbafi24mg%40group.calendar.google.com&amp;ctz=Asia/Hong_Kong&amp;mode=month&amp;hl=en" target="_blank">View In Separate Tab/Window</a></small>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            <!-- comity expanded -->
            <div id="comity" class="expand_containers comity_expand_container">
            	<div class="main_spacer"></div>
            	<div class="expand_encasulation comity_expand_encapsulation box_shadows_normal">
                    <div class="expand_top">
                        <div class="expand_close2">
                        	<img src="<?php bloginfo('template_url'); ?>/images/close_button.png" width="100%" height="100%">
                        </div>
                    </div>
                    <div class="expand_bottom">
                    	<div class="expand_container">
                        	<div class="contact_top">Our Comity</div>
                            <div class="main_spacer"></div>
                            <comity1>
                                <!-- Andy C--> 
                                <div class="comity_expand_sections">
                                    <div class="comity_expand_text">Chairman</div>
                                    <?php if ( !dynamic_sidebar(comity_chairman) ) : ?><?php endif; ?>
                                </div>
                                <!-- Rob Christie-->
                                <div class="comity_expand_spacer"></div>
                                <div class="comity_expand_sections">
                                    <div class="comity_expand_text">Members' Member</div>
                                    <?php if ( !dynamic_sidebar(comity_members) ) : ?><?php endif; ?>
                                </div>
                                <!-- Mark Kelly	-->
                                <div class="comity_expand_spacer"></div>
                                <div class="comity_expand_sections">
                                    <div class="comity_expand_text">Diving Officer</div>
                                    <?php if ( !dynamic_sidebar(comity_divingO) ) : ?><?php endif; ?>
                                </div>
                                <!-- Andy Niven	-->
                                <div class="comity_expand_spacer"></div>
                                <div class="comity_expand_sections">
                                    <div class="comity_expand_text">Expeditions Officer</div>
                                    <?php if ( !dynamic_sidebar(comity_expeditionsO) ) : ?><?php endif; ?>
                                </div>
                                <!-- Mike Belshaw -->
                                <div class="comity_expand_spacer"></div>
                                <div class="comity_expand_sections">
                                    <div class="comity_expand_text">Training Officer</div>
                                    <?php if ( !dynamic_sidebar(comity_trainingO) ) : ?><?php endif; ?>
                                </div>
                                <!-- W.H.Tam -->
							</comity1>
                            <comity2>
                                <div class="comity_expand_sections">
                                    <div class="comity_expand_text">Equipment Officer</div>
                                    <?php if ( !dynamic_sidebar(comity_equipmentO) ) : ?><?php endif; ?>
                                </div>
                                <!-- Jo Roberts	-->
                                <div class="comity_expand_spacer"></div>
                                <div class="comity_expand_sections">
                                    <div class="comity_expand_text">Secretary</div>
                                    <?php if ( !dynamic_sidebar(comity_secretary) ) : ?><?php endif; ?>
                                </div>
                                <!-- Chris Roberts	-->
                                <div class="comity_expand_spacer"></div>
                                <div class="comity_expand_sections">
                                    <div class="comity_expand_text">Treasurer</div>
                                    <?php if ( !dynamic_sidebar(comity_treasurer) ) : ?><?php endif; ?>
                                </div>
                                <!-- Rhonda Coleman	-->
                                <div class="comity_expand_spacer"></div>
                                <div class="comity_expand_sections">
                                    <div class="comity_expand_text">Social Secretary</div>
                                    <?php if ( !dynamic_sidebar(comity_socialS) ) : ?><?php endif; ?>
                                </div>
                                <!-- Jennifer Du Wei -->
                                <div class="comity_expand_spacer"></div>
                                <div class="comity_expand_sections">
                                    <div class="comity_expand_text">Webmaster</div>
                                    <?php if ( !dynamic_sidebar(comity_webmaster) ) : ?><?php endif; ?>
                                </div>
                            </comity2>
                        </div>
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
<script type="text/javascript" src="js/jquery.mobile.custom.min.js"></script>
	<!-- Loading for header, footer and flexslider -->
	<script>
	   $(document).ready(function($) {
			/*JS animations*/
			$(".hidden_error").hide();
			$(".carousel").hide();
			$(".expand_containers").hide();
			$("#carousel1").show();
			/*Second layer fade in*/
			$("#arrow_forward").click(function() {	
				$(".carousel").hide(0);
				$("#carousel2").show();
			});
			$("#arrow_back").click(function() {
				$(".carousel").hide(0);
				$("#carousel1").show();
			});
			$("#about_expand_button").click(function() {	
				$(".carousel").hide(0);
				$(".carousel_container").hide(0);
				$("#about").show();
			});
			$("#what_expand_button").click(function() {	
				$(".carousel").hide(0);
				$(".carousel_container").hide(0);
				$("#what").show();
			});
			$("#contact_expand_button").click(function() {	
				$(".carousel").hide(0);
				$(".carousel_container").hide(0);
				$("#contact").show();
			});
			$("#FAQ_expand_button").click(function() {	
				$(".carousel").hide(0);
				$(".carousel_container").hide(0);
				$("#FAQ").show();
			});
			$("#schedule_expand_button").click(function() {	
				$(".carousel").hide(0);
				$(".carousel_container").hide(0);
				$("#schedule").show();
			});
			$("#comity_expand_button").click(function() {	
				$(".carousel").hide(0);
				$(".carousel_container").hide(0);
				$("#comity").show();
			});
			$(".expand_close").click(function() {	
				$(".expand_containers").hide(0);
				$(".carousel_container").show();
				$("#carousel1").show();
			});
			$(".expand_close2").click(function() {	
				$(".expand_containers").hide(0);
				$(".carousel_container").show();
				$("#carousel2").show();
			});
			function showHide() {
				$(".hidden_error").show();	
			}
	   });
	</script>
