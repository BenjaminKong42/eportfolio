<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PaulController 
{
    #[Route('/paul', name: 'app_paul')]
    public function index(): Response
    {
        return $this->render('paul/index.html.twig', [
            'controller_name' => 'PaulController',
          
        ]);
    }
}


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/paul/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('paul/home.html.twig');
    }
}
