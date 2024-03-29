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
Route::get('/posts', 'PostController@index');
Route::get('/posts/edit/{id}', 'PostController@edit');
Route::get('/posts/add', function () {
    return view('post.addnew');
});
Route::post('/posts', 'PostController@store');
Route::put('/posts/{id}', 'PostController@update');
Route::delete('/posts/{id}', 'PostController@delete');
