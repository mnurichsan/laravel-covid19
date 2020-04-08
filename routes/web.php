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

Route::get('/', 'Covidapi@index')->name('home');
Route::get('/data-provinsi', 'Covidapi@prov')->name('provinsi');
Route::get('/cara-pencegahan-covid19', 'Covidapi@cegah')->name('pencegahan');
Route::get('/gejala-covid19', 'Covidapi@gejala')->name('gejala');
Route::get('/call-center', 'Covidapi@call')->name('callcenter');
Route::get('/about', 'Covidapi@about')->name('about');
