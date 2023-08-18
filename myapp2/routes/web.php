<?php

use App\Models\Post;
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
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', function () {
    return view('posts',[
        'Posta'=>Post::all()
    ]);
});
Route::get('/post/{sth}', function ($idsa) {

    return view('post', [
        'wpost' => Post::findOrFail($idsa)
    ]);
});

// Route::get('/post/{sth}', function ($slack) {
//     //$targetfile=resource_path()."\posts\{$slack}.html";
//     $targetfile = resource_path() . "\\..\\resources\\posts\\{$slack}.html";
//     $entireObj=cache()->remember("post.{$slack}",3600,function() use($targetfile){
//         return file_get_contents($targetfile);
//     });
//     return view('post', [
//         'wpost' => $entireObj
//     ]);
// });
