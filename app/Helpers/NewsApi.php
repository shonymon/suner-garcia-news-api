<?php

namespace App\Helpers;

use GuzzleHttp\Client;

class NewsApi {

    public static $api_url = 'https://newsapi.org/v2/everything';

    public static function getNews($search, $page = 1, $pageSize = 20)
    {
        $httpClient = new Client();
        $apikey = self::getApiKey();
        $response = $httpClient->get(self::$api_url, [
            'query' => [
                'q' => $search,
                'pageSize' => $pageSize,
                'page' => $page,
                'apiKey' => $apikey
            ]
        ]);
        $contents = json_decode($response->getBody(), true);
        return $contents;
    }

    protected static function getApiKey() {
        return env('NEWS_API_KEY', null);
    }

    public static function hasPrev($page)
    {
        if ($page == 1) { return false; }
        else { return true; }
    }

    public static function hasNext($page, $perPage, $total)
    {
        if (($page * $perPage) < $total) { return true; } 
        else { return false; }
    }
}
