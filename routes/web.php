<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kouzaContoroller;
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
    return view('vue');
});

Route::post('/', [kouzaContoroller::class, 'post'])->name('post');
Route::get('/recv', [kouzaContoroller::class, 'recv'])->name('recv');
