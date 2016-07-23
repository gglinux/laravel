<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function test()
    {
        $article = Article::find(2);
        echo $article->title();
    }
}
