<?php

namespace ProjetoBuscador\src;

 require 'C:\Users\rlirio\Buscador-Cursos\vendor\autoload.php';

 use GuzzleHttp\ClientInterface;
 use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
    private ClientInterface $Client;
    private Crawler $Crawler ;
    public function __construct(ClientInterface $Client, Crawler $Crawler)
    {
         $this->Client = $Client;
         $this->Crawler = $Crawler;
    }

    public function buscar(string $url): array
    {
         $resposta = $this->Client->request('GET', $url);
         $html = $resposta->getBody();
         $this->Crawler->addHtmlContent($html);
         $elementosCursos = $this->Crawler->filter('span.card-curso__nome');

         $cursos = [];
        foreach ($elementosCursos as $elemento) {
             $cursos[] = $elemento->textContent;
        }
         return $cursos;

    }
}
