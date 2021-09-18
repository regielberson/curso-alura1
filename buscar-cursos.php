<?php

require 'C:\Users\rlirio\Buscador-Cursos\vendor\autoload.php';
require 'C:\Users\rlirio\Buscador-Cursos\src\Buscador.php';


use GuzzleHttp\Client;
use ProjetoBuscador\src\Buscador;
use Symfony\Component\DomCrawler\Crawler;

$Client = new  Client(['base_uri'=> 'https://www.alura.com.br/', 'verify' => false]);
$Crawler = new Crawler();


$buscador = new Buscador($Client, $Crawler);


$cursos = $buscador->buscar('/cursos-online-programacao/php');


foreach ($cursos as $curso) {
    echo $curso .PHP_EOL;
}