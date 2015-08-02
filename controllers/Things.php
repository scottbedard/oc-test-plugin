<?php namespace Bedard\Test\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Things Back-end Controller
 */
class Things extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Bedard.Test', 'test', 'things');
    }
}