<?php
/**
 * Default configure file
 * Copy this file as a new file named 'config.php',
 *	set your configure in the new file,
 *	and DO NOT modify this file directly.
 *
 * @package      artofwar
 * @copyright    Copyright 2010, Fwolf
 * @author       Fwolf <fwolf.aide+artofwar@gmail.com>
 * @since        2010-08-02
 */

if (!defined('FWOLFLIB')) {
	define('FWOLFLIB', 'fwolflib/');
}

require_once(FWOLFLIB . 'func/config.php');
// Global config data array
if (!defined('DEFAULT_CONFIG_DONE')) {
	$config = array();
}

// ID of this server, this value need to be re-assign in config.php
SetCfg('serverid', 0);


// ========= In the config.php, you can delete below contents =========
if (!defined('DEFAULT_CONFIG_DONE')) {
	// Server ID, global, permanent define, idx is primary key, value is name.
	// In application, identify servers by idx/id
	SetCfg('servers.0.address', 'about:blank');
	SetCfg('servers.0.description', 'Your serverid setting is WRONG.');
	SetCfg('servers.1.address', 'http://www.fwolf.com');
	SetCfg('servers.1.description', 'My main internet website');
	SetCfg('servers.2.address', 'https://office.fwolf.com:82');
	SetCfg('servers.2.description', 'My office intranet website');
	SetCfg('servers.3.address', 'https://home.fwolf.com');
	SetCfg('servers.3.description', 'My home local website');
	SetCfg('servers.1005.address', 'ssh://svr5');
	SetCfg('servers.1005.description', 'Svr5, test linux/mysql server.');
	SetCfg('servers.1006.address', 'ssh://svr6');
	SetCfg('servers.1006.description', 'Svr6, linux/mysql server.');
	// My working machine use 1000-1999


	define('DEFAULT_CONFIG_DONE', true);

	if (defined('P2R') && file_exists(P2R . 'config.php'))
		require(P2R . 'config.php');
}
?>
