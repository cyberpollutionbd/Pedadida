<?php
/* 

Variables to be used

$user_id = ID
$info->user_login = User Name
$info->user_pass = User Password
$info->user_email = Email
$info->first_name = First Name
$info->last_name = Last Name


Info needed to add is at bottom.


*/
    
    $wpdb->insert( 
    	'user', 
    	array( 
    	    'id_member' => $user_id,
    		'member_name' => $info->user_login, 
    		'email_address' => $info->user_email,
    		'passwd' => $info->user_pass, 
    		'real_name' => $info->first_name . " " . $info->last_name
    	));
    

`ref` ,
				`username` ,
				`password` ,
				`fullname` ,
				`email` ,
				`usergroup` ,
				`last_active` ,
				`logged_in` ,
				`last_browser` ,
				`last_ip` ,
				`current_collection` ,
				`accepted_terms` ,
				`account_expires` ,
				`comments` ,
				`session` ,
				`ip_restrict` ,
				`password_last_change` ,
				`login_tries` ,
				`login_last_try` ,
				`approved` ,
				`lang` ,
				`created`



		
		
		
		
		
		
		
		
		
		
		
			while ($userRow = mysql_fetch_array($this_user_data_se)) {
					$username=$userRow['user_username'];
					$password=$userRow['user_password'];
					$password=md5("RS" . $username . $password);
					$fullname=$userRow['user_displayname'];
					$email=$userRow['user_email'];
					$usergroup=$userRow['user_level_id'];
					$last_active="2010-11-27 01:38:01";
					$logged_in=1;
					$last_browser="NULL";
					$last_ip=$userRow['user_ip_lastactive'];
					$current_collection=2;
					$accepted_terms=1;
					$account_expires="NULL";
					$comments="NULL";
					$session="NULL";
					$ip_restrict="NULL";
					$password_last_change="0000-00-00 00:00:00";
					$login_tries=0;
					$login_last_try="NULL";
					$approved=$userRow['user_enabled'];
					$lang="en-us";
					$created="CURRENT_TIMESTAMP";
				}
				
				// FIND OUT WHICH GROUP USER IS IN 
				if($usergroup == 1) // GENERAL
			
		
						
						$new_user = mysql_query("INSERT INTO `user` (
				`ref` ,
				`username` ,
				`password` ,
				`fullname` ,
				`email` ,
				`usergroup` ,
				`last_active` ,
				`logged_in` ,
				`last_browser` ,
				`last_ip` ,
				`current_collection` ,
				`accepted_terms` ,
				`account_expires` ,
				`comments` ,
				`session` ,
				`ip_restrict` ,
				`password_last_change` ,
				`login_tries` ,
				`login_last_try` ,
				`approved` ,
				`lang` ,
				`created`
				)
				VALUES (

NULL , '$username', '$password', '$fullname', '$email', '$usergroup', '$last_active', '1', NULL, '$last_ip', '3', '$accepted_terms', NULL, '', '', '', '0', '0', NULL , '$approved', '$lang' , CURRENT_TIMESTAMP )") or die(mysql_error());