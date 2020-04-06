<?php

	//application details
		$apps[$x]['name'] = "Aastra";
		$apps[$x]['uuid'] = "c3b13bbc-3015-4c09-87e8-416749b29f66";
		$apps[$x]['category'] = "Vendor";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.0";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "";
<<<<<<< HEAD
=======
		$apps[$x]['description']['en-gb'] = "";
>>>>>>> pr/2
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-de'] = "";
		$apps[$x]['description']['es-cl'] = "";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-fr'] = "";
		$apps[$x]['description']['he-il'] = "";
		$apps[$x]['description']['it-it'] = "";
		$apps[$x]['description']['nl-nl'] = "";
		$apps[$x]['description']['pl-pl'] = "";
		$apps[$x]['description']['pt-br'] = "";
		$apps[$x]['description']['pt-pt'] = "";
		$apps[$x]['description']['ro-ro'] = "";
		$apps[$x]['description']['ru-ru'] = "";
		$apps[$x]['description']['sv-se'] = "";
		$apps[$x]['description']['uk-ua'] = "";
		
	//default settings
		$y=0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c471163a-12fa-11e8-b642-0ed5f89f718b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "aastra_gmt_offset";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Aastra timezone offset in minutes (e.g. 300 = GMT-5 = Eastern Standard Time)";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c47117a2-12fa-11e8-b642-0ed5f89f718b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "aastra_time_format";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Aastra clock format";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c47119aa-12fa-11e8-b642-0ed5f89f718b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "aastra_date_format";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Aastra date format";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "b31b1423-a04c-4b4a-9c55-a0b3791642c3";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "aastra_ptime";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "20";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Set Aastra ptime";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "8b676397-2cf7-45de-a7ec-f3ceb7d529e3";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "aastra_silence_suppression";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable Aastra codec silence suppression (on / off)";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "1455b1b0-68ec-400d-be84-1d1132aea72f";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "aastra_zone_minutes";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Offset in minutes from GMT, 300 = GMT-5 = Eastern Standard Time, -120 = GMT+2 = Eastern European Time";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c90e804a-d2bb-431a-ace8-5c69e140c539";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "aastra_sip_silence_suppression";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Aastra SIP silence suppression - silence suppression: deactivated (0), activated (1); enabled on G.711 with CN(RFC3389) or G.729AB";
		$y++;
		
?>
