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

Route::get('/', 'MahasiswaController@home');

Route::get('/show/{prodi}', 'MahasiswaController@show');

Route::get('/edit/{prodi}/{no_ujian}', 'MahasiswaController@edit');

Route::post('/edit/{prodi}/{no_ujian}','MahasiswaController@update');

Route::get('/tambah/{prodi}', 'MahasiswaController@create');

Route::post('/tambah/{prodi}', 'MahasiswaController@store');

Route::get('/hapus/{prodi}/{no_ujian}', 'MahasiswaController@destroy');	
