<?php

/*
|--------------------------------------------------------------------------
| Instagram
|--------------------------------------------------------------------------
|
| Instagram client details
|
*/

$config['instagram_client_name']	= 'Cinsta';
$config['instagram_client_id']		= '5ef90d2fcd0648478370f8bcd7c757c4';
$config['instagram_client_secret']	= 'f7af25a2dd51418283b587623c4be3f3';
$config['instagram_callback_url']	= 'http://localhost/cinsta/Demo/authorize/get_code/';
$config['instagram_website']		= 'http://localhost/cinsta/';
$config['instagram_description']	= 'Codeigniter Instagram API Library';
	
/**
 * Instagram provides the following scope permissions which can be combined as likes+comments
 * 
 * basic - to read any and all data related to a user (e.g. following/followed-by lists, photos, etc.) (granted by default)
 * comments - to create or delete comments on a user’s behalf
 * relationships - to follow and unfollow users on a user’s behalf
 * likes - to like and unlike items on a user’s behalf
 * 
 */
$config['instagram_scope'] = 'basic+comments+relationships+likes';

// There was issues with some servers not being able to retrieve the data through https
// If you have this problem set the following to FALSE 
// See https://github.com/ianckc/CodeIgniter-Instagram-Library/issues/5 for a discussion on this
$config['instagram_ssl_verify']		= TRUE;