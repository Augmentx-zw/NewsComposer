<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\News;

class HomeController extends AbstractController
{
    // /**
    //  * @Route("/home", name="app_home")
    //  */
    public function index(): Response
    {
        $news = $this->getDoctrine()
            ->getRepository(News::class)
            ->findAll();


        return $this->render('home/index.html.twig', [
            'news' => $news,
        ]);
    }
}
