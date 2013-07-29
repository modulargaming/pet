<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Tab for Pet List
 *
 * @package    MG/Pet
 * @category   Tab
 * @author     Modular Gaming
 * @copyright  (c) 2012-2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */
class MG_Tab_PetList extends Abstract_Tab {

	public function __construct(Model_User $user, array $pets)
	{
		$this->view = new View_Tab_PetList;
		$this->view->user = $user;
		$this->view->pets = $pets;
	}

}
