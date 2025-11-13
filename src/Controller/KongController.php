// src/Controller/KongController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KongController extends AbstractController
{
    #[Route('/kong', name: 'app_kong')]
    public function index(): Response
    {
        return $this->render('kong/index.html.twig', [
            'controller_name' => 'KongController',
        ]);
    }
}
