<?php


use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Mockery\Generator\StringManipulation\Pass\Pass;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
| * Route::get -> Consultar
| * Route::post -> Guardar
| * Route::delete -> Eliminar
| * Route::Put -> Actualizar
*/


/**
 * Ejemplo de Rutas con controlador
 *
Route::get('/',[PageController::class, 'home'])->name('home');

Route::get('blog', [PageController::class, 'blog'])->name('blog');

Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');
 */

/**
 * Ejemplo de Grupo del controlador ->
 */
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');

    Route::get('blog', 'blog')->name('blog');

    Route::get('blog/{slug}', 'post')->name('post');
});
