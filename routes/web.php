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
    return view('overview');
});
Route::get('/overview', function () {
    return view('overview');
});

Route::get('/nav', function () {
    return view('x');
});
Route::get('/education', function () {
    return view('education');
});
Route::get('/research', function () {
    return view('research');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/training', function () {
    return view('training');
});
Route::get('/job', function () {
    return view('job');
});
