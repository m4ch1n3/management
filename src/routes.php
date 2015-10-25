<?php

use Illuminate\Routing\Router;
use Orchestra\Support\Facades\Foundation;

/*
|--------------------------------------------------------------------------
| Frontend Routing
|--------------------------------------------------------------------------
*/

Foundation::group('blupl/management', 'management', ['namespace' => 'Blupl\Management\Http\Controllers'], function (Router $router) {
    $router->post('member', 'ManagementController@store');
    $router->get('member/create', 'ManagementController@create');
    $router->get('member', 'ManagementController@index');
    $router->get('/', 'HomeController@index');

});

/*
|--------------------------------------------------------------------------
| Backend Routing
|--------------------------------------------------------------------------
*/

Foundation::namespaced('Blupl\Management\Http\Controllers\Admin', function (Router $router) {
    $router->group(['prefix' => 'management'], function (Router $router) {
        $router->get('/', 'HomeController@index');
        $router->match(['GET', 'HEAD', 'DELETE'], 'profile/{roles}/delete', 'HomeController@delete');

    });
});
