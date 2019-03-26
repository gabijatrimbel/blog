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

Route::get('contact', function(){
  $name = 'Gabija';
  $email = 'gabija@mailerlite.com';
  $phone = '861011777';

  $interests = [
    'Taskiukas',
    'Travel',
    'Turqouise'
  ];

  $data = compact('name', 'email', 'phone', 'interests');

  return view('contact', $data);
});

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
