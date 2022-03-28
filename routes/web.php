<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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

// Route::get('/', function () {
//     return view('siswa.index');
// });
Route::get('/',[SiswaController::class,'index']);
Route::get('/tambah_siswa',[SiswaController::class,'create']);
Route::post('/simpan_siswa',[SiswaController::class,'store']);
Route::get('/edit_siswa/{id}',[SiswaController::class,'edit']);
Route::patch('/simpan_edit/{id}',[SiswaController::class,'update']);
Route::get('/hapus/{id}',[SiswaController::class,'destroy']);

