<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Abstract base view for pet
 *
 * @package    MG/Pet
 * @category   View
 * @author     Modular Gaming
 * @copyright  (c) 2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */
class MG_Abstract_View_Pet extends Abstract_View {

	protected function get_breadcrumb()
	{
		return array_merge(parent::get_breadcrumb(), array(
			array(
				'title' => 'Your pets',
				'href'  => Route::url('pets')
			)
		));
	}

} // End Abstract_View_Pet
