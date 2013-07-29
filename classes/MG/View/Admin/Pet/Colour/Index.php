<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * View for Admin Pet Colour
 *
 * @package    MG/Pet
 * @category   View
 * @author     Modular Gaming
 * @copyright  (c) 2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */
class MG_View_Admin_Pet_Colour_Index extends Abstract_View_Admin {

	public $title = 'Pet colours';

	public function colours()
	{
		$colours = array();

		foreach ($this->colours as $colour)
		{
			$colours[] = array(
				'id'          => $colour->id,
				'name'        => $colour->name,
				'description' => $colour->description,
				'locked'      => (bool) $colour->locked
			);
		}

		return $colours;
	}

}
