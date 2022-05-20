<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
    return view('welcome');
});
Route::get('/mahasiswa','App\Http\Controllers\MahasiswaController@index');
Route::get('/mahasiswa/tambah','App\Http\Controllers\MahasiswaController@tambah');
Route::post('/mahasiswa/store','App\Http\Controllers\MahasiswaController@store');
Route::get('/mahasiswa/edit/{id}','App\Http\Controllers\MahasiswaController@edit');
Route::post('/mahasiswa/update','App\Http\Controllers\MahasiswaController@update');
Route::get('/mahasiswa/hapus/{id}','App\Http\Controllers\MahasiswaController@hapus');
