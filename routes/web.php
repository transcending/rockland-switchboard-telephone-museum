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

# New route
Route::get('/example', function () {
    return 'hello there!';
});

# Existing route
Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/books/{title}', function($title) {
    return 'Results for the book: '.$title;
});
*/

Route::get('/home', 'HomeController@index');
Route::get('/events', 'EventController@index');
Route::get('/exchangeprojects', 'ExchangeProjectController@index');
Route::get('/museumstories', 'MuseumStoryController@index');
Route::get('/networksounds', 'NetworkSoundController@index');
Route::get('/operatorstories', 'OperatorStory@index');
Route::get('/photoarchives', 'PhotoArchiveController@index');
Route::get('/videoarchives', 'VideoArchiveController@index');