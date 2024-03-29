<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" =>  "About",
        "name"  =>  "Agnes Emanuella Wagey",
        "email" =>  "agnes.ema.09@gmail.com",
        "image" =>  "santa.jpg",
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// Route::get('/blog', function () {
//     return view('posts', [
//         "title" => "Posts",
//         "posts" => Post::all() //Kalo property static, pake self::, Kalo property biasa, pake $this->
//     ]);
// });

Route::get('/posts/{post:slug}', [PostController::class, 'show']);
//Route::get('posts/{slug}', [PostController::class, 'show']);
// Route::get('posts/{slug}', function($slug) {
    
    
//     return view('post', [
//         "title" => "Single Post",
//         "post"  => Post::find($slug)
//     ]);
// });
