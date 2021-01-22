<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Support\Facades\Route;

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
    return response()->json([
        'message' => "Welcome to Backend",
        'app_name' =>  env('APP_NAME'),
        'app_version' => env('APP_VERSION')
    ]);
});

Route::group(['prefix' => 'tourism'],function () {
    Route::get('/', function () {
        return response()->json([
            'message' => 'Route of tourism'
        ]);
    });
    Route::get('/categories', 'TourismCategoryController@get_all_categories');
    Route::get('/all', 'TourismController@get_all_tourism');
    Route::get('/search', 'TourismController@get_tourism_by_search');
});
