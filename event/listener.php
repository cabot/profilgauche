<?php
/**
*
* @package phpBB Extension - Profil sur la gauche
* @copyright (c) cabot
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace cabot\profilgauche\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	protected $request;

	protected $template;

	protected $user;

	public function __construct(\phpbb\request\request $request, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.ucp_prefs_view_data'			=> 'ucp_prefs_data_add',
			'core.ucp_prefs_view_update_data'	=> 'ucp_prefs_data_update',
			'core.page_header'					=> 'include_files_profilgauche',
		);
	}

	public function ucp_prefs_data_add($event)
	{
		$this->user->add_lang_ext('cabot/profilgauche', 'ucp');

		$profilgauche = $this->request->variable('profilgauche', (bool) $this->user->data['user_profilgauche']);
		$event['data'] = array_merge($event['data'], array(
			'profilgauche'	=> $profilgauche,
		));

		$this->template->assign_vars(array(
			'S_PROFILGAUCHE'	=> $profilgauche,
		));
	}

	public function ucp_prefs_data_update($event)
	{
		$event['sql_ary'] = array_merge($event['sql_ary'], array(
			'user_profilgauche'		=> $event['data']['profilgauche'],
		));
	}

	public function include_files_profilgauche($event)
	{
		$this->template->assign_vars(array(
			'S_DISPLAY_PROFILGAUCHE'	=> $this->user->data['user_profilgauche'],
		));
	}	
}
