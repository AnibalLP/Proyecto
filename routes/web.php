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
    return view('welcome');
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ayuda/Ayuda', [App\Http\Controllers\WreckController::class, 'wreck'])->name('ayuda.Ayuda');
Route::get('/comunidad/Comunidad', [App\Http\Controllers\MenuController::class, 'comunidad'])->name('comunidad.Comunidad');
Route::get('/derechos/Derechos', [App\Http\Controllers\MenuController::class, 'derechos'])->name('derechos.Derechos');
Route::get('/informacion/Informacion', [App\Http\Controllers\MenuController::class, 'informacion'])->name('informacion.Informacion');
Route::get('/mision/mision', [App\Http\Controllers\MenuController::class, 'mision'])->name('mision.mision');
Route::get('/contenido/Contenido', [App\Http\Controllers\MenuController::class, 'contenido'])->name('contenido.Contenido');
