<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('default/index.html.twig');
    }

    #[Route('/test', name: 'test')]
    public function test(): Response
    {
        return $this->render('default/index.html.twig');
    }

    #[Route('/second', name: 'second')]
    public function second(): Response
    {
        return $this->render('default/index.html.twig');
    }
}
