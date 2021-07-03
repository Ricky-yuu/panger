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

// Route::get('/', function () {
//    return view('welcome');
// });


Route::group(['namspace'=>'backend'], function(){
    Route::resource('dashboard','backend\DashboardController');
});

Route::group(['namespace'=>'frontend'], function(){
    Route::resource('home', 'HomeController');
});