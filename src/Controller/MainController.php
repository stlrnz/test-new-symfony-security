<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class MainController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function mainAction(Environment $twig): Response
    {
        return new Response($twig->render('main.html.twig'));
    }
}