<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'cookie'       => 'token', // autologin token cookie name for ORM driver tokens
	'driver'       => 'File',
	'hash_key'     => NULL,
	'hash_method'  => 'sha256',
	'lifetime'     => 1209600,
	'session_key'  => 'auth_user',
	'session_type' => Session::$default,

	// Username/password combinations for the Auth File driver
	'users' => array(
		// 'admin' => '',
	),

);
