<?php

namespace dudumanto\consumo;

class Search {
    private $url = "https://viacep.com.br/ws/";

    public function getAdressFromZipcode(string $zipCode): array {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);
        
        $get = file_get_contents($this->url . $zipCode . "/json");

        if ($get === false) {
            return ['error' => 'Erro na requisição'];
        }

        $data = json_decode($get, true);

        if ($data === null) {
            return ['error' => 'Erro no JSON retornado'];
        }

        return $data;
    }
}