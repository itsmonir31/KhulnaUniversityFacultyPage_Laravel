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

Route::get('/c_offered', function () {
    return view('c_offered');
});

Route::get('/c_material', function () {
    return view('c_material');
});

Route::get('/publications', function () {
    return view('publications');
});

Route::get('/projects', function () {
    return view('projects');
});


Route::get('/workshop', function () {
    return view('workshop');
});

Route::get('/s_thesis', function () {
    return view('s_thesis');
});

Route::get('/s_project', function () {
    return view('s_project');
});
