<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'main', 'uses' => 'IndexController@index']);
Route::get('projects', ['as' => 'projectList', 'uses' => 'IndexController@projectList']);
Route::get('projects/{slug}', ['as' => 'projectCart', 'uses' => 'IndexController@projectCart']);
Route::get('about-ud', ['as' => 'about', 'uses' => 'IndexController@about']);
Route::get('blog', ['as' => 'blog', 'uses' => 'BlogController@index']);
Route::get('blog/{slug}', ['as' => 'blog.record', 'uses' => 'BlogController@cart']);


Route::auth();

Route::get('/home', 'HomeController@index');
