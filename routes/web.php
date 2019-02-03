<?php
Route::get('/','PageController@index');
Route::get('pages.sport','PageController@sport');
Route::get('pages.artish','PageController@artish');
Route::get('pages.technology','PageController@technology');
Route::resource('posts', 'PostController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
