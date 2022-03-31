<?php
/**
*
* @package phpBB Extension - Profil sur la gauche - French
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
	'PROFILGAUCHE'			=> 'Profil sur la gauche',
	'PROFILGAUCHE_EXPLAIN'	=> 'Sélectionner « Non » pour afficher le profil sur la droite.',
));
