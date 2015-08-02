<?php namespace Bedard\Test;

use System\Classes\PluginBase;

/**
 * Test Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Test',
            'description' => 'A plugin to demonstrate unit testing and continuous integration.',
            'author'      => 'Scott Bedard',
            'icon'        => 'icon-code'
        ];
    }

}
