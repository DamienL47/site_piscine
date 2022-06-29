<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="home")
     *
     * je créé une route, en utilisant des commentaires PHP
     * et "@Route" pour spécifier l'url de la page que je veux créer
     * La route est située au dessus de la méthode à appeler
     * pour la page
     */
    public function home()
    {
        // je renvoie une réponse HTTP grâce à l'objet Response
        // (du composant http foundation de Symfony)
        // Ca affichera donc 'hello accueil' quand
        // l'url "/" sera demandée
        return new Response('Hello Accueil');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return new Response('contact');
    }

    /**
     * @Route("/digimon", name="digimon")
     */
    public function digimon()
    {
        return new Response('Petit chat mignon qui se transforme ...');
    }


}