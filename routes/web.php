
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['namespace' => 'Client'], function () {
    Route::get('/', ['uses' => 'IndexController@index']);
	Route::get('/about', ['uses' => 'AboutController@index']);
	Route::get('/contact', ['uses' => 'ContactController@index']);
	Route::get('/gallery', ['uses' => 'GalleryController@index']);
});

Route::group(['namespace'=> 'Admin'], function(){
	Route::get('/admin', ['uses' => 'IndexController@index']);
});

Route::get('/single', function(){
	return view('single');
});

Route::get('/shortcodes', function(){
	return view('shortcodes');
});
