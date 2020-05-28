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

Route::prefix('v1')->group(function () {
    Route::post('signup', 'v1\AuthController@signup');
    Route::post('signin', 'v1\AuthController@signin');

    Route::middleware('auth:api')->get('get-user', 'v1\AuthController@get_user');
    Route::middleware('auth:api')->post('change-user-name', 'v1\AuthController@change_user_name');
});