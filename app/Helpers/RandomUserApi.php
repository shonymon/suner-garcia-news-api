<?php

namespace App\Helpers;

use GuzzleHttp\Client;

class RandomUserApi {

    public static $api_url = 'https://randomuser.me/api/';

    public static function getRandomUser()
    {
        $httpClient = new Client();
        $response = $httpClient->get(self::$api_url);
        $contents = json_decode($response->getBody(), true);
        return $contents;
    }

    public static function getRandomUsers($quantity)
    {
        $httpClient = new Client();
        $response = $httpClient->get(self::$api_url, ['query' => ['results' => $quantity]]);
        $contents = json_decode($response->getBody(), true);
        return $contents;
    }
}
