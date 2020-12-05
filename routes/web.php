<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::any('/posts/search', 'PostController@search')->name('posts.search');
Route::put('/posts/{id}', 'PostController@update')->name('posts.update');
Route::get('posts/edit/{id}', 'PostController@edit')->name('posts.edit');
Route::get('posts/create', 'PostController@create')->name('posts.create');
Route::delete('posts/{id}', 'PostController@destroy')->name('posts.destroy');
Route::get('posts', 'PostController@index')->name('posts.index');
Route::post('posts', 'PostController@store')->name('posts.store');
Route::get('posts/{id}', 'PostController@show')->name('posts.show');
