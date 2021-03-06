<?php 
namespace Clusterpoint\Helper;

/**
 *
 * Wrapper for field selector. Adjusts field to correct format.
 *
 * @category   Clusterpoint 4.0 PHP Client API
 * @package    clusterpoint/php-client-api-v4
 * @copyright  Copyright (c) 2016 Clusterpoint (http://www.clusterpoint.com)
 * @author     Marks Gerasimovs <marks.gerasimovs@clusterpoint.com>
 * @license    http://opensource.org/licenses/MIT    MIT
 */
class Key
{
    /**
     * Holds name of the field for operations.
     *
     * @var string
     */
    public $string;

    /**
     * Sets output string for __toString().
     *
     * @param string $string
     * @return void
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * Whether object is accessed as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->string;
    }
}
