<?php

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "D'Blogs ID",
        "email" => "dblogs@gmail.com",
        "image" => "msbing.jpeg"
    ]);
});

Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Blog 1",
            "author" => "Bg Satu",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi possimus accusantium quisquam totam. Consequuntur maiores corporis animi, aut voluptas optio quisquam id, magni ea temporibus modi quibusdam ut repellat quas."
        ],
    
        [
            "title" => "Blog 2",
            "author" => "Bg Dua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore qui iure velit suscipit, culpa aliquid odio quia eaque dolor recusandae nulla placeat minus, error, officiis maiores corporis veritatis similique explicabo? Dignissimos quia dolorum assumenda laudantium repellendus cum doloribus numquam officiis aut totam, eius porro, aperiam alias illo illum. Doloremque, inventore?"
        ],
    ];

    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});
