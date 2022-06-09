
<!--
<?php
/*

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        return view('articles');
    }
}
*/
?>

    // dans 'web.app'

        // 1°

Route::get('/', 'App\Http\Controllers\PostController@index');


        // 2°
        // obligation d'ajouter le chemin AVEC 'use'


use App\Http\Controllers\PostController;


Route::get( '/' , [PostController::class, 'index']);

-->
