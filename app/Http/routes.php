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

Route::get('/', function () {
    $date = new DateTime('1990-08-16');
    $now = new DateTime();
    $interval = $now->diff($date);
    return view('home', ['age' => $interval->y] );
});
