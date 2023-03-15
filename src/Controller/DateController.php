<?php

namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DateController extends AbstractController
{
    #[Route('/time/now', name: 'app_date')]
    public function index(): Response
    {
        $date = new DateTime();
        return $this->render('date/index.html.twig',[
             'date'=> $date->format('d/m/Y H:i:s')
        ]);
    }

}
