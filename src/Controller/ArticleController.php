<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'app_article')]
    public function index(): Response
    {
        $articles = [
            [
                'title' => 'Article 1',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'publishedAt' => new \DateTime('2022-12-21'),
                'author' => 'John Doe',
            ],
            [
                'title' => 'Article 2',
                'text' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
                'publishedAt' => new \DateTime('2022-07-10'),
                'author' => 'Jane Doe',
            ],
            [
                'title' => 'Article 3',
                'text' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'publishedAt' => new \DateTime('2022-03-01'),
                'author' => 'Bob Smith',
            ],
        ];

        return $this->render('article/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}

