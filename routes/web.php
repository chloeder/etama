<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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
    return view('welcome.index');
});
Route::get('/lacak', function () {
    return view('welcome.lacak');
});
Route::get('/sekilas', function () {
    return view('welcome.sekilas');
});
Route::get('/visi-misi', function () {
    return view('welcome.visimisi');
});
Route::get('/struktur-organisasi', function () {
    return view('welcome.struktur');
});
Route::get('/kontak', function () {
    return view('welcome.kontak');
});
Route::get('/dashboard2', function () {
    return view('dashboard2');
});

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

