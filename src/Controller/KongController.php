<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KongController extends AbstractController
{
    #[Route('/kong', name: 'kong_home')]
    public function index(): Response
    {
        return $this->render('kong/index.html.twig', [
            'name' => 'Ton Nom',
            'description' => "Je suis développeur web passionné par Symfony et la création d'applications modernes.",
            'activities' => [
                "Développement d'applications Symfony",
                "Création de sites web responsives",
                "Intégration d'API REST",
                "Gestion de bases de données MySQL",
                "Utilisation de Docker et GitHub"
            ],
        ]);
    }
}
