<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Nayantaka',
        //     'email' => 'nayantaka@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Athar Alfaturahman',
        //     'email' => 'athar@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Website',
            'slug' => 'website'
        ]);

        Category::create([
            'name' => 'Android',
            'slug' => 'android'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, pariatur rerum quaerat quo reprehenderit similique aliquam provident saepe nostrum esse, error temporibus sapiente ipsum quia enim blanditiis aperiam alias illum recusandae.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, pariatur rerum quaerat quo reprehenderit similique aliquam provident saepe nostrum esse, error temporibus sapiente ipsum quia enim blanditiis aperiam alias illum recusandae. Sunt consequatur reprehenderit ipsa eos deleniti possimus? Cupiditate rem consequuntur quis, aut doloremque, ex deleniti dicta nobis facere, omnis natus? Nam quaerat, aliquid quae ullam nisi ratione id asperiores autem voluptate at numquam ab aut natus voluptas, rem error. Doloremque nihil ducimus, in facilis qui eligendi quae sapiente aperiam libero deserunt reiciendis nulla amet cum mollitia cupiditate minus tempora quam excepturi ad voluptas aliquam ullam veniam necessitatibus? Perferendis, tempora.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, pariatur rerum quaerat quo reprehenderit similique aliquam provident saepe nostrum esse, error temporibus sapiente ipsum quia enim blanditiis aperiam alias illum recusandae.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, pariatur rerum quaerat quo reprehenderit similique aliquam provident saepe nostrum esse, error temporibus sapiente ipsum quia enim blanditiis aperiam alias illum recusandae. Sunt consequatur reprehenderit ipsa eos deleniti possimus? Cupiditate rem consequuntur quis, aut doloremque, ex deleniti dicta nobis facere, omnis natus? Nam quaerat, aliquid quae ullam nisi ratione id asperiores autem voluptate at numquam ab aut natus voluptas, rem error. Doloremque nihil ducimus, in facilis qui eligendi quae sapiente aperiam libero deserunt reiciendis nulla amet cum mollitia cupiditate minus tempora quam excepturi ad voluptas aliquam ullam veniam necessitatibus? Perferendis, tempora.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, pariatur rerum quaerat quo reprehenderit similique aliquam provident saepe nostrum esse, error temporibus sapiente ipsum quia enim blanditiis aperiam alias illum recusandae.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, pariatur rerum quaerat quo reprehenderit similique aliquam provident saepe nostrum esse, error temporibus sapiente ipsum quia enim blanditiis aperiam alias illum recusandae. Sunt consequatur reprehenderit ipsa eos deleniti possimus? Cupiditate rem consequuntur quis, aut doloremque, ex deleniti dicta nobis facere, omnis natus? Nam quaerat, aliquid quae ullam nisi ratione id asperiores autem voluptate at numquam ab aut natus voluptas, rem error. Doloremque nihil ducimus, in facilis qui eligendi quae sapiente aperiam libero deserunt reiciendis nulla amet cum mollitia cupiditate minus tempora quam excepturi ad voluptas aliquam ullam veniam necessitatibus? Perferendis, tempora.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, pariatur rerum quaerat quo reprehenderit similique aliquam provident saepe nostrum esse, error temporibus sapiente ipsum quia enim blanditiis aperiam alias illum recusandae.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, pariatur rerum quaerat quo reprehenderit similique aliquam provident saepe nostrum esse, error temporibus sapiente ipsum quia enim blanditiis aperiam alias illum recusandae. Sunt consequatur reprehenderit ipsa eos deleniti possimus? Cupiditate rem consequuntur quis, aut doloremque, ex deleniti dicta nobis facere, omnis natus? Nam quaerat, aliquid quae ullam nisi ratione id asperiores autem voluptate at numquam ab aut natus voluptas, rem error. Doloremque nihil ducimus, in facilis qui eligendi quae sapiente aperiam libero deserunt reiciendis nulla amet cum mollitia cupiditate minus tempora quam excepturi ad voluptas aliquam ullam veniam necessitatibus? Perferendis, tempora.',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}
