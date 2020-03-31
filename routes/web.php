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
//     return view('admin.index');
// });
Route::get('/dashboard', 'DashController@index');

Route::get('/data', 'AcController@index');
Route::post('/data', 'AcController@store');
Route::get('/delete/{id}', 'AcController@destroy');
Route::get('/edit/{id}', 'AcController@edit');
Route::put('/edit/{id}', 'AcController@update');