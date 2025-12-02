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
        $facts = [
            "Kong est le roi de la jungle 🦍",
            "Ce controller affiche une page de fou !",
            "Tu peux personnaliser tous les effets CSS.",
            "Symfony + Twig = ❤️",
        ];
        return $this->render('kong/index.html.twig', [
            'facts' => $facts,
        ]);
    }
}
