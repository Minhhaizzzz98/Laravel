<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return view('test1');
});
<<<<<<< HEAD
Route::get('/NhomPhuot', function() {
    return view('test2');
});
=======

>>>>>>> 9b2ba0404b1ac0c959cfe202c9f3c874485b48dd
