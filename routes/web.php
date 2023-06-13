<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loginsoc', function () {
    return Socialite::driver('google')->redirect();
})->name('loginsoc');

Route::get('/login/callback', function () {
    $user = Socialite::driver('google')->user();
    // Handle the authenticated user
    // e.g., create a new user or log in an existing user
    // based on the received user information
    
    dd ($user);

    // Redirect the user to the desired location
    return redirect('/');
})->name('login.callback');