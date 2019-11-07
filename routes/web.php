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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// for Admin Route Group
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('tag','TagController');
    Route::resource('category','CategoryController');
    Route::resource('post','PostController');
    Route::resource('subscriber','SubscriberController');

});

// for Author Route Group
Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'Author','middleware'=>['auth','user']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('psot','PostController');
});
