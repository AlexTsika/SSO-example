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

// Google OAuth redirect route
// When this route is visited, the user is redirected to Google for OAuth flow
Route::get('/loginsoc', function () {
    // Redirects the user to Google's OAuth consent page
    return Socialite::driver('google')->redirect();
})->name('loginsoc');

// Google OAuth callback
// This is the route that Google will redirect the user to after they approve the OAuth consent
Route::get('/login/callback', function () {
    // Retrieve the user's information from Google
    $user = Socialite::driver('google')->user();

    // At this point, the developer would typically handle the authenticated user:
    // - If the user already exists in the application's database, the user would be logged in
    // - If the user doesn't exist, a new user could be created in the application's database
    dd ($user);

    // After handling the authenticated user, redirect the user to the desired location
    return redirect('/');
})->name('login.callback');

// GitHub OAuth redirect route
// When this route is visited, the user is redirected to GitHub for OAuth flow
Route::get('/logingithub', function () {
    // Redirects the user to GitHub's OAuth consent page
    return Socialite::driver('github')->redirect();
})->name('logingithub');

// GitHub OAuth callback
// This is the route that GitHub will redirect the user to after they approve the OAuth consent
Route::get('/login/github/callback', function () {
    // Retrieve the user's information from GitHub
    $user = Socialite::driver('github')->user();

    // As with Google OAuth, at this point, the developer would typically handle the authenticated user:
    // - If the user already exists in the application's database, the user would be logged in
    // - If the user doesn't exist, a new user could be created in the application's database
    dd($user);

    // After handling the authenticated user, redirect the user to the desired location
    return redirect('/');
})->name('login.github.callback');