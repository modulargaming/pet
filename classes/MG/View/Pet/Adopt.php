<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * View for pet adopt
 *
 * @package    MG/Pet
 * @category   View
 * @author     Modular Gaming
 * @copyright  (c) 2012-2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */
class MG_View_Pet_Adopt extends Abstract_View_Pet {

	public $title = 'Adopt a pet';

	protected function get_breadcrumb()
	{
		return array_merge(parent::get_breadcrumb(), array(
			array(
				'title' => 'Adopt a pets',
				'href'  => Route::url('pet.adopt')
			)
		));
	}

	public function pets()
	{
		$pets = array();
		foreach ($this->pets as $pet)
		{
			$pets[] = array(
				'id'  => $pet->id,
				'src' => $pet->img(),
				'href' => Route::url('pet', array('name' => strtolower($pet->name))),
				'name' => $pet->name,
				'specie' => $pet->specie->name,
				'colour' => $pet->colour->name,
			);
		}
		return $pets;
	}

}
