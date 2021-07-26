<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RandomUserApi;
use NewsApi;

class NoticiasController extends Controller
{
    public function getNoticiasWithAutores(Request $request)
    {
        $page = ($request->has('page')) ? $request->page : 1;
        $perPage = 20;
        $search = ($request->has('search')) ? $request->search : 'bitcoin';
        $authors = RandomUserApi::getRandomUsers($perPage);
        $news = NewsApi::getNews($search, $page, $perPage);

        for ($i = 0; $i < count($news['articles']); $i++) { 
            $news['articles'][$i]['author'] = $authors['results'][$i]['name']['first'].' '.$authors['results'][$i]['name']['last'];
        }

        $news['page'] = $page;
        $news['perPage'] = $perPage;
        $news['search'] = $search;

        return view('noticias', compact('news'));
    }
}
