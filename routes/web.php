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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',"App\Http\Controllers\StudentController@index");
Route::get('/edit/{id}',"App\Http\Controllers\StudentController@edit");
Route::get('/create',"App\Http\Controllers\StudentController@create");
Route::get('/show/{id}',"App\Http\Controllers\StudentController@show");
Route::any('/store',"App\Http\Controllers\StudentController@store");
Route::any('/update/{id}',"App\Http\Controllers\StudentController@update");
