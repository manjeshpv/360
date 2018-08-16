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
    return view('index');
})->name('index');

Route::get('/dashboard', 'Auth\ProfileController@index')->name('profile.index');
Route::get('/login', 'LoginController@login')->name('auth.login');
Route::post('/login/submit', 'LoginController@submitLogin')->name('auth.login.submit');
Route::get('/social/oauth/google', 'Auth\SocialController@redirectGoogle')->name('auth.social.google');
Route::get('/social/callback/google', 'Auth\SocialController@callbackGoogle');
Route::get('/logout', 'Auth\ProfileController@logout')->name('auth.logout');

Route::get('/social/oauth/facebook', 'Auth\SocialController@redirectFacebook')->name('auth.social.facebook');
Route::get('/social/callback/facebook', 'Auth\SocialController@callbackFacebook');