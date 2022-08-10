<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Post;
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
        User::factory(2)->create();

        User::create ([
            'name' => 'A. Muh. Afrial Ivan Pratama',
            'email' => 'afrialivan0@gmail.com',
            'password' => '111'
        ]);

        Post::factory(30)->create();
    }
}
