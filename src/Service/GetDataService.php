<?php
 
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
 
class GetDataService
{
    private $client;
 
    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }
 
    public function get(): array
    {
 
        $response = $this->client->request(
            'GET',
            'https://entrepot.metropolegrenoble.fr/opendata/38185-GRE/Environnement/json/balade.json'
        );
 
        $data = $response->toArray();
 
        return $data;
    }
}