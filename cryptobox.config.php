<?php
/**
 *  ... Please MODIFY this file ... 
 *
 *
 *  YOUR MYSQL DATABASE DETAILS
 *
 */

 require_once __DIR__.'/laravel-integrated-config/cryptobox.config.php';

 define("DB_HOST", 	$host);				// hostname
 define("DB_USER", 	$user);		// database username
 define("DB_PASSWORD", 	$password);		// database password
 define("DB_NAME", 	$db);	// database name




/**
 *  ARRAY OF ALL YOUR CRYPTOBOX PRIVATE KEYS
 *  Place values from your gourl.io signup page
 *  array("your_privatekey_for_box1", "your_privatekey_for_box2 (otional), etc...");
 */
 
 $cryptobox_private_keys = array($private_keys);




 define("CRYPTOBOX_PRIVATE_KEYS", implode("^", $cryptobox_private_keys));
 unset($cryptobox_private_keys); 

?>