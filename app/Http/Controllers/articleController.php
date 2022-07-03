<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class articleController extends Controller
{
    public function home(){
      $articles = Article::all();

        return view('home' , compact('articles'));
    }
    public function subscribe(Request $request){
        $articles = Article::all();
        $request-> validate (['name' => 'required']);
        $request-> validate (['email' => 'required']);
        Subscriber::create(['name' => $request['name'] , 'email' => $request['email']]);
        return view('home' , compact('articles'));

    }

    public function article($id){
        $articles = Article::all();
        $item = Article::find($id);
        return view('article' , compact(['item' , 'articles']));
    }
}
