<?php namespace Bedard\Test\Models;

use Model;

/**
 * Thing Model
 */
class Thing extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'bedard_test_things';

    /**
     * Store the price as an integer
     *
     * @param float     $value  The price of the thing
     */
    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = intval($value * 100);
    }

    /**
     * Read out the price attribute as a decimal
     *
     * @param  integer  $value  The price of the thing
     * @return float
     */
    public function getPriceAttribute($value)
    {
        return $value / 100;
    }

}
