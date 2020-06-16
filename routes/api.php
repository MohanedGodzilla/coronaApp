<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::group([

    'middleware' => 'api',
    //'namespace' => 'App\Http\Controllers',
    //'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('register', 'AuthController@register');
    Route::post('update', 'AuthController@update');
    Route::post('me', 'AuthController@me');
    
    //reset password
   /*Route::post('create', 'API/PasswordResetController@create');
    Route::get('find/{token}', 'API/PasswordResetController@find');
    Route::post('reset', 'API/PasswordResetController@reset');*/
});
Route::post('getUsers','clientController@getUsers');


/*
Route::group([    
    'middleware' => 'api',
    //'namespace' => 'Auth',    
    //'prefix' => 'password'
], function () {    
    Route::post('create', 'API\PasswordResetController@create');
    Route::get('find/{token}', 'API/PasswordResetController@find');
    Route::post('reset', 'API/PasswordResetController@reset');
});*/