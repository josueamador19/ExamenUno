<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;


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



Route::get('/',[ContactoController::class,'index'])->name('inicioContacto');
Route::get('/contacto/crear',[ContactoController::class,'create'])->name('crearContacto');
Route::post('/contacto/guardar',[ContactoController::class,'store'])->name('storeContacto');
Route::get('/contacto/buscar',[ContactoController::class,'search'])->name('buscarContacto');
Route::get('/contacto/buscar/{correo?}',[ContactoController::class,'searchCorreo'])->name('buscarCorreo');

Route::get('/contacto/vercontacto/{id}',[ContactoController::class,'show'])->name('verContacto');

//Route::get('/',[ContactoController::class,'goBack'])->name('regresar');