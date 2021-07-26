<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RandomUserApi;
use NewsApi;

class TestController extends Controller
{
    public function test()
    {
        $authors = RandomUserApi::getRandomUsers(20);
        $news = NewsApi::getNews('bitcoin', 1);

        for ($i = 0; $i < count($news['articles']); $i++) { 
            $news['articles'][$i]['author'] = $authors['results'][$i]['name']['first'].' '.$authors['results'][$i]['name']['last'];
        }

        return response()->json($news);
    }
}
