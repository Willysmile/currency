<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{
    private $client;

    public function __construct(HttpClientInterface $client) {
        $this->client = $client;
    }

    public function getCurrencyData(): array
    {
        $response = $this->client->request(
            'GET',
            'https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies.json');

        return $response->toArray();


    }
}