<?php
namespace Roveri\SDK;

use GuzzleHttp\Client as Guzzle;

class Factory
{
    private $guzzle;

    public function __construct()
    {
        $this->guzzle = new Guzzle;
    }

    public function create(string $token)
    {
        return new Client($token, $this->guzzle);
    }
}