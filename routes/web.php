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
            "slug" => "blog-1",
            "author" => "Bg Satu",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi possimus accusantium quisquam totam. Consequuntur maiores corporis animi, aut voluptas optio quisquam id, magni ea temporibus modi quibusdam ut repellat quas."
        ],
    
        [
            "title" => "Blog 2",
            "slug" => "blog-2",
            "author" => "Bg Dua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore qui iure velit suscipit, culpa aliquid odio quia eaque dolor recusandae nulla placeat minus, error, officiis maiores corporis veritatis similique explicabo? Dignissimos quia dolorum assumenda laudantium repellendus cum doloribus numquam officiis aut totam, eius porro, aperiam alias illo illum. Doloremque, inventore?"
        ],
    ];

    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});


//Halaman single post
Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
        [
            "title" => "Blog 1",
            "slug" => "blog-1",
            "author" => "Bg Satu",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, distinctio ut! Dolorum, saepe incidunt? Minus repellendus, nam expedita, distinctio esse ab deleniti molestias ratione ipsa molestiae repudiandae vitae nemo libero in. Recusandae voluptatum, molestias iure, similique totam quas deleniti soluta placeat aspernatur obcaecati facilis quidem rerum aliquid. Itaque dolorum, ad corrupti temporibus excepturi sunt omnis aspernatur quisquam vel quo obcaecati debitis quod maiores explicabo nihil ratione alias ab ullam consequuntur perferendis ducimus quam neque dignissimos incidunt. Quasi eligendi delectus quis velit doloremque vero id? Saepe at eaque, necessitatibus mollitia error quae vero fugit temporibus minima, voluptate animi ab tenetur iste."
        ],
    
        [
            "title" => "Blog 2",
            "slug" => "blog-2",
            "author" => "Bg Dua",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. At nemo accusantium id? Obcaecati laborum ut nemo sit doloribus, culpa nam enim natus unde expedita delectus deleniti recusandae harum quae cupiditate fugit error dignissimos nostrum ipsum ab voluptatum doloremque tenetur blanditiis? Iure natus inventore laborum nam sunt est accusamus amet recusandae magni quaerat sint quasi, asperiores suscipit expedita veritatis tempora quisquam? Necessitatibus repellendus accusantium officiis impedit debitis totam placeat consequatur, enim blanditiis fuga nam nulla ratione repellat sit distinctio id dicta atque, eos earum tempore dolorem tenetur aliquid! Rem, modi eius? Ea vitae, eligendi odio corrupti temporibus accusamus beatae reiciendis laudantium expedita, libero ex, excepturi obcaecati modi voluptas? Culpa, minus! Quis accusantium quas ad unde commodi tempora quod minus perferendis itaque?"
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});