<?php
/**
*
* @package phpBB Extension - Profil sur la gauche
* @copyright (c) cabot
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace cabot\profilgauche\migrations;

class cabot_profilgauche_migrations extends \phpbb\db\migration\migration
{
	public function update_schema()
	{
		return array(
			'add_columns'		=> array(
				$this->table_prefix . 'users'	=> array(
					'user_profilgauche'		=> array('BOOL', 1, 'after' => 'user_options'),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_columns'		=> array(
				$this->table_prefix . 'users'	=> array(
					'user_profilgauche',
				),
			),
		);
	}
}
