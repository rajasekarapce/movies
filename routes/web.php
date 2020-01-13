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


Route::get('/locale/{name}', function ($name) {
Session::put('locale', $name);
return redirect()->back();
});
Route::get('/', 'HomeController@index');
Route::group(['middleware' => ['locale']], function () {
    
Route::get('/movie-list', 'MovieController@getMovieList')->name('movie-list');
Route::get('/movie-detail', 'MovieController@getMovieDetail')->name('movie-detail');
Route::get('/celebrity-list', 'CelebrityController@getCelebrityList')->name('celebrity-list');
Route::get('/celebrity-detail', 'CelebrityController@getCelebrityDetail')->name('celebrity-detail');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
