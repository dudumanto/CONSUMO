<?php

use dudumanto\consumo\Search;

require_once "vendor/autoload.php";

$busca = new Search;

$resultado = $busca->getAdressFromZipcode('01001000');

print_r($resultado);
