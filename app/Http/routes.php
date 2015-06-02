<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix'=>'operations'],function(){

    /**
     * this route sum many numbers
     */
    Route ::get('/sum/{value1}/{value2}','OperationController@sum');
    /**
     * this route subtraction many numbers
     */
    Route ::get('/subtraction/{value1}/{value2}','OperationController@subtraction');
    /**
     * this route multiplication many numbers
     */
    Route ::get('/multiplication/{value1}/{value2}','OperationController@multiplication');
    /**
     * this route division many numbers
     */
    Route ::get('/division/{value1}/{value2}','OperationController@division');



});
