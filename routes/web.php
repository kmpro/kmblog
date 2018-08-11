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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index');
//Route::get('/test', 'HomeController@test');
//Route::get('/create', 'ArticleController@create');
//
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::resource('articles', 'ArticleController');
});


//Route::resource('admin', 'Admin\ArticleController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('article/{id}', 'ArticleController@show');
Route::post('comment', 'CommentController@store');