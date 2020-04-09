<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['is_system_on'] = 'y';
$config['multiple_sites_enabled'] = 'n';
$config['show_ee_news'] = 'n';
$config['save_tmpl_files'] = 'y';
// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system_configuration_overrides.html

$config['app_version'] = '5.3.0';
$config['encryption_key'] = '82f23ee242af9b418ccaa4316b312edb08d6999b';
$config['session_crypt_key'] = '4ba1f99659b9773d264b6b7df602c4d64ea5f3e2';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => 'localhost',
		'database' => 'wreckamended',
		'username' => 'root',
		'password' => '',
		'dbprefix' => 'exp_',
		'char_set' => 'utf8mb4',
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => ''
	),
);

// EOF