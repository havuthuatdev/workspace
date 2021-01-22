<?php

use Illuminate\Database\Seeder;
use App\models\article;
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100 ; $i++) { 
            $article = new article;
            $article->title = 'bai viet'.$i;
            $article->content = 'noi dung bai viet'.$i;
            $article->save();
        }
    }
}
