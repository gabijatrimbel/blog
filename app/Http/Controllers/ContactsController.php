<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //*Route::get('contact', function(){
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
    }); //
}
