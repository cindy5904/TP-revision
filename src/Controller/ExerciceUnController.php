<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExerciceUnController extends AbstractController
{
    #[Route('/', name: 'app_exercice_un')]
    public function index(): Response
    {
        return $this->render('exercice_un/index.html.twig', [
            'controller_name' => 'ExerciceUnController',
        ]);
    }
    public function time() : Response 
    {
        return $this->render('exercice_un/time.html.twig');
    }

}
