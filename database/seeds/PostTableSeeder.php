<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post([
            'title' => 'Learning laravel',
            'content' => 'lorem ipsum ui oiuy hiuop hgtuio hsgfkhs aagdj jxxj'
        ]);
        $post->save();

        $post = new Post([
            'title' => 'Learning advanced laravel',
            'content' => 'lorem ipsum ui gfb gshj oiuy hiuop hgtuio hsgfkhs aagdj jxxj'
        ]);
        $post->save();
    }
}
