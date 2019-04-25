<?php

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

Route::get('/', ['as'=>'login', 'uses'=>'loginController@getLogin']);
Route::post('/checkLogin',['as'=>'checklogin', 'uses'=>'loginController@checklogin']);

// Route::group(['middleware' => ['checkAuth']],function(){
// 	Route::get('/dashboard',['as'=>'dashboard','uses'=>'dashboardController@index']);
// });
Route::get('/dashboard', ['as'=>'dashboard', 'uses'=>'dashboardController@index']);
Route::get('/logout',['as'=>'logout','uses' => 'loginController@getLogout']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
