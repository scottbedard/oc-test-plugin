<?php namespace Bedard\Test\Tests;

use Bedard\Test\Models\Thing;

class ThingTest extends \OctoberPluginTestCase
{
    protected $refreshPlugins = ['Bedard.Test'];

    public function test_price_is_stored_as_an_integer()
    {
        $thing = new Thing;
        $thing->price = 9.99;
        $this->assertEquals(999, $thing->attributes['price']);
        $this->assertEquals(9.99, $thing->price);
    }

}
