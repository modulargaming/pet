<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Model Pet Specie
 *
 * @package    MG/Pet
 * @category   Model
 * @author     Modular Gaming
 * @copyright  (c) 2012-2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */
class MG_Model_Pet_Specie extends ORM {

	protected $_table_columns = array(
		'id'          => NULL,
		'name'        => NULL,
		'dir'         => NULL,
		'description' => NULL
	);

	protected $_has_many = array(
		'pets'    => array(
			'model'       => 'User_Pet',
			'foreign_key' => 'specie_id',
		),
		'colours' => array(
			'through'     => 'pet_species_colours',
			'model'       => 'Pet_Colour',
			'foreign_key' => 'specie_id',
			'far_key'     => 'colour_id'
		)
	);

}
