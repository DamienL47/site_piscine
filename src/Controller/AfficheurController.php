<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AfficheurController
{
    // je créé une route qui intègre un id pour garder une structure
    /**
     * @Route("/affiche/{id}")
     */

    public function showArticle($id)
    {
        // Je créé des articles
        $articles = [
            1 => [
                'title' => 'La canicule, il fait chaud',
                'contenu' => 'Je transpire'
            ],
            2 => [
                'title' => 'Fin des moteurs thermiques en 2035',
                'contenu' => 'BROUM'
            ],
            3 => [
                'title' => "l'alcool c'est pas cool",
                'contenu' => "Pourquoi il y a cool dans alcool ? "
            ]
        ];
        $article = $articles[$id];
        return new Response($article['title']);
    }
}