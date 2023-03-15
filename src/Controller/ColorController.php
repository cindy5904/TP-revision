<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ColorController extends AbstractController
{
    
    #[Route('/color/{color}', name: 'app_color_{color}')]
   

    public function dynamique($color): Response
    {
        $message = null;
        if ($color == 'red') {
            $message = 'Attention risque de virus';
        }
        return $this->render('color/index.html.twig', [
            'color' => $color,
            'message' => $message
        ]);
    }
}
     

