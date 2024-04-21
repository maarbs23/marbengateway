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

//API GATEWAY USERS1
$router->get('/users1','User1Controller@index'); //GET ALL USERS
$router->post('/users1', 'User1Controller@add'); //ADD USERS
$router->get('/users1/{id}', 'User1Controller@show'); // GET USER BY ID
$router->put('/users1/{id}','User1Controller@update'); // UPDATE USER ID
$router->patch('/users1/{id}','User1Controller@update'); // UPDATE USER ID
$router->delete('/users1/{id}', 'User1Controller@delete'); //DELETE USER

//API GATEWAY USERS2
$router->get('/users2','User2Controller@index'); //GET ALL USERS
$router->post('/users2', 'User2Controller@add'); //ADD USERS
$router->get('/users2/{id}', 'User2Controller@show'); // GET USER BY ID
$router->put('/users2/{id}','User2Controller@update'); // UPDATE USER ID
$router->patch('/users2/{id}','User2Controller@update'); // UPDATE USER ID
$router->delete('/users2/{id}', 'User2Controller@delete'); //DELETE USER