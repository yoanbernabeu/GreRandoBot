<?php
 
namespace App\Service;

use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class TwitterFormatPostService
{
    private $client;
 
    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function format(array $data): string
    {
        $libelle = $data['libelle'];
        $difficulte = $data['difficulte'];
        $duree = $data['duree'];
        $massif = $data['massif']['libelle'];
        $denivellee = $data['denivellee'];
        $depart = $data['depart'];
        $url = 'https://www.grenoble-montagne.com/balade/' . $data['idtf'] . '/779-.htm';

        $long = '[' . $massif . '] [' . $libelle . '] [Difficulté: ' . $difficulte . '] [' .  $duree . ' - ' . $denivellee . 'D+] [Départ: ' . $depart . '] ' . $url;
        $format = substr($long, 0, 280);

        return $format;
    }
}