<?php

use Illuminate\Support\Facades\Route;

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

    $title = 'Laravel primi passi';

    $teachers = [
        'Adriano',
        'Luigi',
        'Giuseppe'
    ];
    

    return view('home', compact('title', 'teachers'));
})->name('homepage');
