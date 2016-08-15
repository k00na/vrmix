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

// IMPORTANT - TOKEN MISMATCH, THE ULTIMATE FIX
	/*
		LINK: http://www.jeffmould.com/2016/06/30/laravel-5-2-token-mismatch-errors/
	*/


Route::group(['middlewareGroups' => 'web'], function () {

	Route::get('/', function () {
    	return view('welcome');
	});

	Route::auth();

	Route::get('/home', 'HomeController@index');
	Route::get('/about', 'HomeController@about');
	
   });

	// mixpanel events
	Route::get('/news', 'HomeController@news');
	Route::get('/purchase', 'HomeController@purchase');
	Route::get('/trial', 'HomeController@trial');