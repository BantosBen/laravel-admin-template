<?php

use Illuminate\Support\Facades\Route;

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
    return view('index', ['title_page' => 'Login']);
});

Route::get('/contribution', function () {
    return view('contribution', ['title_page' => 'Contribution']);
});

Route::get('/dashboard', function () {
    return view('dashboard', ['title_page' => 'Dashboard']);
});

Route::get('/events', function () {
    return view('events', ['title_page' => 'Events']);
});

Route::get('/member', function () {
    return view('member', ['title_page' => 'Member']);
});

Route::get('/posts', function () {
    return view('posts', ['title_page' => 'Posts']);
});

Route::get('/profile', function () {
    return view('profile', ['title_page' => 'Profile']);
});

Route::get('/revenue', function () {
    return view('revenue', ['title_page' => 'Revenue']);
});