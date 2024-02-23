<?php
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TallerController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/curso/{dato1}/{dato2}',[CursoController::class,'hola'])->name('curso.show');
Route::get('/primo/{numero}', [TallerController::class, 'esPrimo'])->name('curso.esPrimo');
Route::get('/curso',[CursoController::class,'create']);
Route::post('/curso',[CursoController::class,'store'])->name('curso.store');

Route::get('/tallerprimo', [TallerController::class, 'create']);
Route::post('/tallerprimo', [TallerController::class, 'store'])->name('taller.store');

Route::get('/talleramigo', [TallerController::class, 'createForm']);
Route::post('/talleramigo', [TallerController::class, 'storeAmigos'])->name('taller.store-amigos');

Route::get('/calculo-notas', [TallerController::class, 'createNotas']);
Route::post('/calculo-notas', [TallerController::class, 'storeNotas'])->name('taller.store-notas');

Route::get('/calcular-cuadratica', [TallerController::class, 'createCuadratica']);
Route::post('/calcular-cuadratica', [TallerController::class, 'storeCuadratica'])->name('cuadratica.store');
