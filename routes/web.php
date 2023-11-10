<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", "App\Http\Controllers\SessionController@index");

Route::get("/setSession","App\Http\Controllers\SessionController@setSession");

Route::get("/getSession","App\Http\Controllers\SessionController@getSession");

Route::get("deleteSession","App\Http\Controllers\SessionController@deleteSession");

Route::get("/setMultiSession","App\Http\Controllers\SessionController@setMultiSession");

Route::get("/getSingleSession","App\Http\Controllers\SessionController@getSingleSession");
