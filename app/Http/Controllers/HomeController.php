<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $articles = Article::orderBy('created_at')->take(10)->get(); //все записи из таблицы Articles



        return view('home',[
            'articlesMod' => $articles
        ]);
    }
}
