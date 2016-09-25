<?php 
$base_url = '';
// The regular expression is only a basic validation for a valid "Host" header.
// It's not exhaustive, only checks for valid characters.
if (isset($_SERVER['HTTP_HOST']) && preg_match('/^((\[[0-9a-f:]+\])|(\d{1,3}(\.\d{1,3}){3})|[a-z0-9\-\.]+)(:\d+)?$/i', $_SERVER['HTTP_HOST']))
{
	$base_url = (is_https() ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST']
		.substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], basename($_SERVER['SCRIPT_FILENAME'])));
}

$config['base_url'] = $base_url;