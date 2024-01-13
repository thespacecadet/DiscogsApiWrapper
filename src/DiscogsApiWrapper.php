<?php

namespace Thespacecadet\DiscogsApiWrapper;



use GuzzleHttp\Client;

class DiscogsApiWrapper
{

    /**
     * @var Client
     */
    private $client;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

//    public function check(){
//        $client = new \GuzzleHttp\Client();
//    }
}