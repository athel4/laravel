<?php

use App\Models\Items;
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
    return view('welcomeAth');
});
Route::get('/sumting/{target}', function ($crab) {
    //find an item by its param and pass to a view call sth
    $item = Items::find($crab);

    return view('sth',['wala'=>$item]);
})//->whereAlphaNumeric('target');
->where('target','[A-z0-9_+%\-#]+');
Route::get('/sumting/{target}', function ($crab) {
    //find an item by its param and pass to a view call sth
    //$item = Items::find($crab);

    return view('sth',['wala'=>Post::findOrFail($crab)]);
})//->whereAlphaNumeric('target');
->where('target','[A-z0-9_+%\-#]+');
//geets job done bt nt elegant
// Route::get('/sumting/{target}', function ($crab) {
//     $targetItemPath=__DIR__."/../resources/sths/{$crab}.html";
//     if(! file_exists($targetItemPath))
//     {
//         return redirect('/');
//         // abort(404);
//         // ddd("You tried to load a page that does not exist");
//     }

//     //caching the page
//     // $targetObj= cache()->remember('sumting.{target}',3,function() use($targetItemPath){
//     //     //var_dump('file_get_contents');
//     //     return file_get_contents($targetItemPath);
//     // });
//     //shorthand version
//     $targetObj= cache()->remember('sumting.{target}',now()->addHours(1),fn() =>file_get_contents($targetItemPath));


//     //normal load, if 10k user calling, thn system finds the file 10k times, heavy processing
//     //$targetObj = file_get_contents($targetItemPath);


//     return view('sth',['wala'=>$targetObj]);
// })//->whereAlphaNumeric('target');
// ->where('target','[A-z0-9_+%\-#]+');