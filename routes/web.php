<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\TestController;
use  App\Http\Controllers\HomeController;



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
// Route::get('/about', function () {
//     return view('about');
// });


Route::get('/layout', function () {
    return view('layout');
});
Route::view('/about', 'about');


Route::get('/posts/{id}', function ($id) {
    return $id ;
});
// maxi darori ynon nfss smiya ex id id 
// Route::get('/posts/{id}/{live}', function ($id,$live) {
//     return $id.' est livre'.$live ;
// });


Route::get('/posts/{id}', function ($id) {
    $posts=[
        1=>['title'=>'laravel'],
       2=> ['title'=>'react']
    ];
    return view( 'posts.show',['data'=>$posts[$id]]);
});
 //Route::get('/home','HomeController@home')->name('home');
// Route::get('/c',[TestController::class,'test'])->name('home');

Route::get('/blog',[HomeController::class,'Home'])->name('home');
Route::get('/article/(id)',[HomeController::class,'Article']);


