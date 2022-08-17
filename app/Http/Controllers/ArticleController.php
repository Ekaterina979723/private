<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getArticle($cat,$article_id){
        $item = Article::where('id',$article_id)->first(); //сделана выборка из таблицы (из модели) и взято лишь 1 айди
//dd($item);
        return view('article',[
            'item' => $item
        ]);
    }
}
