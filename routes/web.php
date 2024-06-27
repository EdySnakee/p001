<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Home');
})->name('home');

Route::get('blog', function () {
    //CONSULTA LISTADO
    $posts = [
        ['id' => 1, 'title' => 'php', 'slug' => 'php'],
        ['id' => 2, 'title' => 'laravel', 'slug' => 'laravel'],
    ];
    return view('blog', ['post' => $posts]);
})->name('blog');

Route::get('blog/{slug}', function ($slug) {
    //CONSULTA POST
    $post = $slug;
    return view('post', ['post' => $post]);
})->name('post');
