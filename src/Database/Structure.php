<?php
/**
 * @package    framework
 * @copyright  Copyright 2005-2019 HUBzero Foundation, LLC.
 * @license    http://opensource.org/licenses/MIT MIT
 */

namespace Hubzero\Database;

/**
 * Database structure class
 */
class Structure extends Query
{
	/**
	 * Retrieves field information about the given tables
	 *
	 * @param   string  $table     The name of the database table
	 * @param   bool    $typeOnly  True (default) to only return field types
	 * @return  array
	 * @since   2.0.0
	 */
	public function getTableColumns($table, $typeOnly=true)
	{
		$columns = $this->query($this->syntax->getColumnsQuery($table), 'rows');

		return $this->syntax->normalizeColumns($columns, $typeOnly);
	}
}
