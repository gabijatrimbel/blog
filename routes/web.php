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

Route::view('about', 'about');

//Route::view('contact', 'contact');

Route::get('contact-us', 'ContactsController@index')->name('show_contacts');


Route::get('locations', function(){
  $birthCity = 'Vilnius';
  $birthCountry = 'Lietuva';

  $countriesLived = [
    'Taivanas',
    'JAV',
    'Singapuras'
  ];

  $locations = compact('birthCity', 'birthCountry', 'countriesLived');

  return view('locations', $locations);

});

//Route::resource('posts', 'PostController');

Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{id}', 'PostController@show')->name('posts.show');
Route::get('posts/create', 'PostController@create')->name('posts.create');

Route::get('storage', 'FileController@index')->name('storage.index');
Route::get('storage/{id}', 'FileController@show')->name('storage.show');
Route::get('storage/create', 'FileController@create')->name('storage.create');
