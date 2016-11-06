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
//
//Route::get('/', function () {
//    return view('welcome');
//});
//

// app/Http/routes.php

Route::get('/', 'WelcomeController@index');
Route::get('contact', 'WelcomeController@contact');
Route::get('about', 'PagesController@about');