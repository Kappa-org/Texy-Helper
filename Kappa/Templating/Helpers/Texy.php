<?php
/**
 * Texy.php
 * @author: Ondřej Záruba <zarubaondra@gmail.com>
 * @date: 23.12.12
 */

namespace Kappa\Templating\Helpers;

class Texy extends \Texy
{
	/**
	 * @param array $params
	 */
	public function __construct($params = null)
	{
		parent::__construct();
		if($params)
			foreach($params as $index => $param)
			{
				$variable = array_keys($param);
				$this->$index->$variable[0] = $param[$variable[0]];
			}
	}
}
