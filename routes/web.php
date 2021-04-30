<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->group(['prefix'=>'api/'],
    function() use ($router)
    {
        $router->post('products/add','ProductController@createProduct');
        $router->get('products/index','ProductController@getAll');
        $router->put('products/update/{id}','ProductController@updateProduct');
        $router->delete('products/delete/{id}','ProductController@deleteProduct');
        
});
