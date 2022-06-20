<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

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
        Post::factory(2)->create();
        Category::factory()->create();
         /*
         $cryptocurrency = Category::create([
             'name'=>'Cryptocurrency',
             'slug'=>'cryptocurrency'
         ]);

        $MLG = Category::create([
            'name'=>'Major League Gaming',
            'slug'=>'major-league-gaming'
        ]);

        $outerSpace = Category::create([
            'name'=>'From Outer Space',
            'slug'=>'from-outer-space'
        ]);

        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$cryptocurrency->id,
            'title'=>'BTC dropped under 29K $',
            'slug'=>'btc-drop-2022',
            'excerpt'=>'Bitcoin dropped under 29K $ in 4 days.',
            'body'=>'Bitcoin dropped harder than your grandma from the stairs LMAOOOOO.'
        ]);

        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$MLG->id,
            'title'=>'Call of Duty:Warzone tomorrow update',
            'slug'=>'cod-update',
            'excerpt'=>'New update will add new arsenal of guns and vehicles',
            'body'=>'New update will add new arsenal of guns and vehicles. The total size will be increased to 1,7 TB on HDD'
        ]);

        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$outerSpace->id,
            'title'=>'NASA spotted a suspicous activity on the Moon\'s surface',
            'slug'=>'sus-activity-Moon',
            'excerpt'=>'NASA spotted a suspicious activity on the Moon on friday 13th 2022.',
            'body'=>'NASA spotted a suspicious activity on the Moon on friday 13th 2022. Speculants says that the Russia is responsible for the activity on the Moon.'
        ]);*/
    }
}
