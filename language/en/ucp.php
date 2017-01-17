<?php
/**
*
* @package phpBB Extension - Profil sur la gauche - English
* @copyright (c) cabot
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
