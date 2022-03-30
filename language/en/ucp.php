<?php
/**
*
* @package phpBB Extension - Profil sur la gauche - English
* @copyright (c) cabot
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'PROFILGAUCHE'			=> 'Profile on left',
	'PROFILGAUCHE_EXPLAIN'	=> 'Select “No” to display the profil on the right.',
));
