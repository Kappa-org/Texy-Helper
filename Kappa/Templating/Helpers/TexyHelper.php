<?php
/**
 * Texy.php
 *
 * @author: Ondřej Záruba <zarubaondra@gmail.com>
 * @date: 23.12.12
 *
 * @package Kappa
 */

namespace Kappa\Templating\Helpers;

class TexyHelper extends \Texy
{
	/**
	 * @param int $level
	 * @throws \Kappa\InvalidArgumentException
	 */
	public function setMaxHeading($level)
	{
		if(!is_int($level))
			throw new \Kappa\InvalidArgumentException("Class " . __METHOD__ . " required integer as parameter!");
		$this->headingModule->top =$level;
	}
}
