<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AppController extends AbstractController
{
    #[Route('/app', name: 'app_app')]
    public function index(): Response
    {
        $jour = (int) date('j');
        $message = $jour % 2 === 0 ? 'Coucou, en forme ?' : 'ça gaz';

        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
            'message' => $message
        ]);
    }
}
