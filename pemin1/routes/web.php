<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Support\Str;
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

$router->get('/key', function () {
    return Str::random(32);
});

$router->get('/test', 'myController@index');

$router->get('/date', 'myController@date');

$router->get('/user/{id}', 'myController@getUser');

$router->post('/user', 'myController@postUser');

$router->put('/user/{id}', 'myController@putUser');

$router->delete('/user/{id}', 'myController@deleteUser');
