<?php

	//application details
		$apps[$x]['name'] = "Account Settings";
		$apps[$x]['uuid'] = "3a3337f7-78d1-23e3-0cfd-f14499b8ed97";
		$apps[$x]['category'] = "Switch";;
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.0";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "User account settings can be changed by the user.";
<<<<<<< HEAD
=======
		$apps[$x]['description']['en-gb'] = "User account settings can be changed by the user.";
>>>>>>> pr/2
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "Einstellungen des Benutzerkontos können durch den Benutzer geändert werden.";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-de'] = "Einstellungen des Benutzerkontos können durch den Benutzer geändert werden.";
		$apps[$x]['description']['es-cl'] = "La configuración de la cuenta puede ser modificada por el usuario.";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-fr'] = "L'usager peut modifier la configuration de son compte";
		$apps[$x]['description']['he-il'] = "";
		$apps[$x]['description']['it-it'] = "";
		$apps[$x]['description']['nl-nl'] = "";
		$apps[$x]['description']['pl-pl'] = "";
		$apps[$x]['description']['pt-br'] = "Configurações da conta podem ser alteradas pelo usuário.";
		$apps[$x]['description']['pt-pt'] = "Configurações de conta de utilizador pode ser alterado pelo utilizador.";
		$apps[$x]['description']['ro-ro'] = "";
		$apps[$x]['description']['ru-ru'] = "Настройки учетной записи могут быть изменены пользователем";
		$apps[$x]['description']['sv-se'] = "";
		$apps[$x]['description']['uk-ua'] = "";

	//permission details
		$y=0;
		$apps[$x]['permissions'][$y]['name'] = "user_setting_view";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "user_setting_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "user_setting_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "user_setting_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "user_setting_category_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
<<<<<<< HEAD
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "user_account_setting_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "4d532f0b-c206-c39d-ff33-fc67d668fb69";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "user_account_setting_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
=======
>>>>>>> pr/2

	//schema details
		$y=0;
		$apps[$x]['db'][$y]['table']['name'] = "v_user_settings";
		$apps[$x]['db'][$y]['table']['parent'] = "v_users";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "user_setting_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "user_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_users";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "user_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "user_setting_category";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = "true";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the category.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "user_setting_subcategory";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = "true";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the subcategory.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "user_setting_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = "true";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the name.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "user_setting_value";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the value.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "user_setting_order";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "user_setting_enabled";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "user_setting_description";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = "true";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";

?>
