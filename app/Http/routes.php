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

Route::get('/welcome/', function () {
    return view('welcome');
});

Route::controller('blog','BlogController');


//
//Route::get('/de/', function () {
//    echo 'd123e';
//    return view('user/welcome');
//    //return view('welcome');
//});

