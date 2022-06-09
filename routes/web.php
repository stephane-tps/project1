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

    // Il est possible d'ecrire le chemain sa le "/"
    //  "/bon" === "bon"

Route::get('bon', function () {
    return view('bon');
});

    // Le paramettre de 'view()' doit suivre le chemain de dossier en dossier separer d'un point

Route::get('/steph', function () {
    return view('steph.home');
});

    // vous avez ici un exemple pour renvoyer sur le chemain "/posts",
    // des chaines de caracteres en json (votre navigateur peut interpreter cette ecriture comme un fichier json)

Route::get('/posts', function () {
    return response()->json([
        'TITLE' => 'mon méga titre',
        'titre2' => 'mon sous-titre'
    ]);
});

/*

Route::get('/', [PostController::class, 'index'])->name('welcome');
Route::get('/posts/{id}', [PostController::class, 'show'])->whereNumber('id');
Route::get('/contact', [PostController::class, 'contact'])->name('contact');

*/
