<?php

use Illuminate\Database\Seeder;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        for($i=0;$i<10;$i++)
        {
            $article = new Article([
                'slug' => 'Article Title '.$i,
            ]);
            $article->save();
            
        }
        
    }
}
