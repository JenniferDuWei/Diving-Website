<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- CSS and loading code -->
	<!--link href="http://www.hongkongadventuretours.com/images/fav_test.ico?v1" rel="shortcut icon" type="image/x-icon" />-->
    <link href="<?php bloginfo('template_directory');?>/css/flexslider.css" rel="stylesheet" type="text/css" />
	<!-- PC -->
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/SCDC_1024.css" media="only screen and (max-width: 1199px) and (min-width: 960px)"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/SCDC_800.css" media="only screen and (max-width: 959px) and (min-width: 800px)"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/SCDC_640.css" media="only screen and (max-width: 799px) and (min-width: 640px)"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/SCDC_480.css" media="only screen and (max-width: 639px) and (min-width: 480px)"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/SCDC_320.css" media="only screen and (max-width: 479px)" />
    <!-- Mobile -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/SCDC_1024.css" media="only screen and (max-device-width: 1199px) and (min-device-width: 960px)"/>
    
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/SCDC_800.css" media="only screen and (max-device-width: 959px) and (min-device-width: 800px)"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/SCDC_640.css" media="only screen and (max-device-width: 799px) and (min-device-width: 640px)"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/SCDC_480.css" media="only screen and (max-device-width: 639px) and (min-device-width: 480px)"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/SCDC_320.css" media="only screen and (max-device-width: 479px)" />
	<!-- Javascript -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.flexslider-min.js"></script>
		<!-- Loading for header, footer and flexslider -->
		<script>
		   $(document).ready(function($) {
			 	<!--Flexslider -->
			 	$(window).load(function() {
					$('.flexslider').flexslider({controlNav: false ,directionNav: false,animationSpeed: 2000,});
					$('#sponsor_slide').flexslider({controlNav: false , randomize: true, directionNav: false,animationSpeed: 1000,});
					$('#comity_slide').flexslider({controlNav: false , randomize: true, directionNav: false,animationSpeed: 1000,});
				});
		   });
		</script>
	<!-- Google Analytics -->