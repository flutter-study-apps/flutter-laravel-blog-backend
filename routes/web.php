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

// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('hello', 'BlogController@create');
Route::get('dashboard', 'DashboardController@index');

Route::get('create-category', 'CategoryController@create');

Route::get('all-categories', 'CategoryController@index');
Route::get('edit-category/{id}', 'CategoryController@edit');

Route::get('delete-category/{id}', 'CategoryController@destroy');
Route::post('update-category/{id}', 'CategoryController@update');
Route::post('post-category-form', 'CategoryController@store');


Route::get('all-blog-posts', 'BlogPostController@index');
Route::get('get-blog-post-form', 'BlogPostController@create');
Route::get('edit-blogPost/{id}', 'BlogPostController@edit');
Route::post('update-blog-post/{id}', 'BlogPostController@update');

Route::get('delete-blogPost/{id}', 'BlogPostController@destroy');
Route::post('store-blog-post', 'BlogPostController@store');
