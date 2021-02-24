<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorld;
use App\Http\Controllers\TutoresController;

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
    return redirect('/tutores');
});

Route::get('/tutores', [TutoresController::class, 'index']);
Route::get('/tutores/create', [TutoresController::class, 'create']);
Route::post('/tutores/create', [TutoresController::class, 'store'])->name('tutores.store');

// Si quieres añadir todas poner linea de abajo (descomentar)
//Route::Resource('tutores', TutoresController::class);

// Route::get('/hola', [HelloWorld::class, 'prueba']);