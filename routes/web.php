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
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/new', 'UsersController@new');
Route::get('/create', 'UsersController@create');
Route::post('/posts', 'UsersController@save');
Route::get('/users/{user}', 'PagesController@confirm');
Route::post('/delete', 'UsersController@delete' );