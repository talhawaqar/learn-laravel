<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PostController;


Route::get('/', function(){
  return "Welcome to laravel";
});


// Route with dynamic parameter
Route::get('welcome/{name}', function($name){
  return "Welcome $name";
});


// Route with opotional dynamic parameter
Route::get('welcome/{name?}', function($name = "guest"){
  return "Welcome $name";
});

// Redirect route method
Route::redirect('hola','/');

// View route method
Route::view('welcome2', 'welcome', ['name' => 'Talha Waqar']);

Route::get('we/{name?}', [WelcomeController::class, 'welcome']);
Route::get('goodbye/{name?}', [WelcomeController::class, 'goodbye']);

Route::resource('posts', 'PostController');

// Route::get('/', function () {
//   return view('welcome');
// });
