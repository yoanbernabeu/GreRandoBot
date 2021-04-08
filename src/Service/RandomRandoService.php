<?php
 
namespace App\Service;
 
class RandomRandoService
{
    public function choice(array $data): ?array
    {
        $checkIsRando = false;

        while($checkIsRando == false) {
            $choice = $this->random($data);
            $checkIsRando = $this->onlyRando($choice);
        }

        return $choice;
    }

    public function random(array $data): array
    {
        $random = array_rand($data);

        return $data[$random];
    }

    public function onlyRando(array $data): bool
    {
        if ($data['activite']['libelle'] === 'Randonnée pédestre') {
            return true;
        }

        return false;
    }
}