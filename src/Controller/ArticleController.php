<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/articles", name="article")
     * @param ArticleRepository $articleRepository
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(ArticleRepository $articleRepository)
    {
        $articles = $articleRepository->findAll();
        return $this->json([
            'articles' => $articles
        ]);
    }
}
