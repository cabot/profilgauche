<?php
/**
*
* @package phpBB Extension - Profil sur la gauche - French
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
	'PROFILGAUCHE'			=> 'Profil sur la gauche',
	'PROFILGAUCHE_EXPLAIN'	=> 'Sélectionner « Non » pour afficher le profil sur la droite.',
));
