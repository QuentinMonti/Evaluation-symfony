<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

use Twig\Environment;



class Home
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage(Environment $twig)
    {
        $content = $twig->render('index.html.twig');

        return new Response($content);
  }

}