<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class KongController extends AbstractController
{
    #[Route('/', name: 'app_kong', requirements: ['_locale' => 'fr|en'])]
    public function index(): Response
    {
        return $this->render('kong/index.html.twig', [
            'controller_name' => 'KongController',
        ]);
    }

    #[Route('/cv', name: 'app_cv', requirements: ['_locale' => 'fr|en'])]
    public function cv(): Response
    {
        return $this->render('kong/cv.html.twig', [
            'controller_name' => 'KongController',
        ]);
    }
    
    #[Route('/contacte', name: 'app_contacte', requirements: ['_locale' => 'fr|en'])]
    public function contacte(): Response
    {
        return $this->render('kong/contacte.html.twig', [
            'controller_name' => 'KongController',
        ]);
    }

    #[Route('/Administrer', name: 'app_administrer', requirements: ['_locale' => 'fr|en'])]
    public function administrer(): Response
    {
        return $this->render('competence/administrer/administrer.html.twig', [
            'controller_name' => 'KongController',
        ]);
    }

    #[Route('/Programmer', name: 'app_programmer', requirements: ['_locale' => 'fr|en'])]
    public function programmer(): Response
    {
        return $this->render('competence/programmer/programmer.html.twig', [
            'controller_name' => 'KongController',
        ]);
    }

    #[Route('/Connecter', name: 'app_connecter', requirements: ['_locale' => 'fr|en'])]
    public function connecter(): Response
    {
        return $this->render('competence/connecter/connecter.html.twig', [
            'controller_name' => 'KongController',
        ]);
    }

    #[Route('/moi', name: 'app_moi', requirements: ['_locale' => 'fr|en'])]
    public function moi(): Response
    {
        return $this->render('kong/moi.html.twig', [
            'controller_name' => 'KongController',
        ]);
    }
}
