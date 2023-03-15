<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ColorController extends AbstractController
{
    // protected $colors =[
    //     ['name' => 'bleu', 'color' => 'blue'],
    //     ['name' => 'Attention virus', 'color' => 'red']
    // ];
    // #[Route('/color/{color}', name: 'app_color')]
    // public function index(): Response
    // {

    
    //     return $this->render('index.html.twig', [
    //         'color' =>$this->colors,
    //     ]);
    //  }
    #[Route('/color/{color}', name: 'appcolor{color}')]
    public function dynamique($color): Response
    {

        return $this->render('color/index.html.twig', [
            'color' => $color,
        ]);
    }
}
     

