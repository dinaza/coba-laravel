<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Blog 1",
            "slug" => "blog-1",
            "author" => "Author Satu",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi possimus accusantium quisquam totam. Consequuntur maiores corporis animi, aut voluptas optio quisquam id, magni ea temporibus modi quibusdam ut repellat quas."
        ],
    
        [
            "title" => "Blog 2",
            "slug" => "blog-2",
            "author" => "Bg Dua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore qui iure velit suscipit, culpa aliquid odio quia eaque dolor recusandae nulla placeat minus, error, officiis maiores corporis veritatis similique explicabo? Dignissimos quia dolorum assumenda laudantium repellendus cum doloribus numquam officiis aut totam, eius porro, aperiam alias illo illum. Doloremque, inventore?"
        ],
    ];

    public static function all()
    {
        return self::$blog_posts;
    }
    
    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $new_post = [];
        foreach ($posts as $post) {
            if ($post['slug'] === $slug) {
                $new_post = $post;
            }
        }

        return $new_post;
    }
}
