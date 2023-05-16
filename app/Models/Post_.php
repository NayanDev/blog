<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Nayantaka",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem est, repellendus consectetur deleniti ipsa velit nihil rem minima explicabo facilis, architecto perspiciatis incidunt, voluptatibus esse autem obcaecati commodi nostrum expedita quos libero tempore? Corporis odio quod aliquid velit. Eos autem reiciendis sunt beatae, porro totam veniam consequatur quae magni ipsum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Taka Nayan",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste maxime unde tempora laudantium tempore magni dolorem quasi nihil ut velit ex sit, sapiente voluptatem? Illo a, nesciunt ea quis id cupiditate itaque consectetur debitis aliquam illum facilis cum impedit similique reiciendis deleniti culpa quod voluptas nobis facere sapiente ex minima nam. Quisquam optio tempora eos ea alias cum, possimus suscipit accusantium dolorum quod maxime repellendus temporibus nisi a doloribus ipsum eligendi quasi earum perspiciatis sequi? Ipsam facere fugiat magni totam, repudiandae accusamus voluptatem atque, cum repellat eius quidem omnis blanditiis aliquid libero illo aliquam. Atque nisi nesciunt ipsa nostrum architecto?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
