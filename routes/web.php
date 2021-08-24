<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\FormulariosController;

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

Route::get('/', homeController::class);

Route::post('EnvioForm', [FormulariosController::class,'enviarFormulario'])->name('envioform');

// Route::get('cursos', [cursoController::class, 'index']);

// Route::get('cursos/create', [cursoController::class,'create']);

// Route::get('cursos/(curso', [cursoController::class,'show']);

/*Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria=null) {
    return"este es el curso $curso, de la categoria $categoria";
    if ($categoria) {
        return"este es el curso $curso, de la categoria $categoria";
        }else{
            return "Bienvenido al curso: $curso";
        }
});*/