<?php
   if ( function_exists('register_sidebar') ) {
	   	/*Carousel 1*/
		register_sidebar(array('name'=>'about_text'));
		register_sidebar(array('name'=>'about_picture'));
		register_sidebar(array('name'=>'what_text'));
		register_sidebar(array('name'=>'what_picture'));
		register_sidebar(array('name'=>'contact_text'));
		register_sidebar(array('name'=>'contact_picture'));
		register_sidebar(array('name'=>'sponsors'));
		/*Carousel 2*/
		register_sidebar(array('name'=>'FAQ_text'));
		register_sidebar(array('name'=>'FAQ_picture'));
		register_sidebar(array('name'=>'media_text'));
		register_sidebar(array('name'=>'media_picture'));
		register_sidebar(array('name'=>'schedule_text'));
		register_sidebar(array('name'=>'schedule_picutre'));
		register_sidebar(array('name'=>'comity_pictures_small'));
		/*Expanded sections*/
		register_sidebar(array('name'=>'expand_about_slider'));
		register_sidebar(array('name'=>'expand_about_text'));
		register_sidebar(array('name'=>'expand_about_picture'));
		register_sidebar(array('name'=>'expand_what_slider'));
		register_sidebar(array('name'=>'expand_what_text'));
		register_sidebar(array('name'=>'expand_what_picture'));	
		register_sidebar(array('name'=>'expand_contact_text'));
		register_sidebar(array('name'=>'expand_contact_picture'));
		register_sidebar(array('name'=>'expand_contact_google'));
		register_sidebar(array('name'=>'expand_FAQ_text'));
		register_sidebar(array('name'=>'expand_schedule'));
			/*comity*/
		register_sidebar(array('name'=>'comity_chairman'));
		register_sidebar(array('name'=>'comity_members'));
		register_sidebar(array('name'=>'comity_divingO'));
		register_sidebar(array('name'=>'comity_expeditionsO'));
		register_sidebar(array('name'=>'comity_trainingO'));
		register_sidebar(array('name'=>'comity_equipmentO'));
		register_sidebar(array('name'=>'comity_secretary'));
		register_sidebar(array('name'=>'comity_treasurer'));
		register_sidebar(array('name'=>'comity_socialS'));
		register_sidebar(array('name'=>'comity_webmaster'));
	}
?>