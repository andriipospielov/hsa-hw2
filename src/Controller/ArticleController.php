<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
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
    public function index(ArticleRepository $articleRepository, EntityManagerInterface $entityManager)
    {

//        $article = new Article();
//        $article->setContent(md5(random_bytes(666)));
//        $article->setTitle(md5(random_bytes(666)));
//
//        $entityManager->persist($article);
//        $entityManager->flush();


        $articles = $articleRepository->findAll();
        return $this->json([
            'articles' => $articles
        ]);
    }
}
