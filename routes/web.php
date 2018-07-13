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

Route::get('/', 'PagesController@index')->name('home');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('/login', 'Auth\LoginController@login')->name('iniciarsesion');

Route::get('/logout', 'Auth\LoginController@logout')->name('cerrarsesion');

Route::get('/SingIn', 'Auth\RegisterController@showRegistrationForm')->name('registrarse');

Route::post('/SingIn', 'Auth\RegisterController@register')->name('registrar');

Route::get('/Contact', 'PagesController@Contacto')->name('contact');

Route::get('/ayuda', 'PagesController@ayuda')->name('help');

Route::get('/vista', 'PagesController@vista')->name('vistaadicional');
