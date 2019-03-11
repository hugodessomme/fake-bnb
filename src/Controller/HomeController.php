<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{ 

    /**
     * @Route("/hello/{prenom}/{age}", name="hello")
     * Montre la page qui dit bonjour
     *
     * @return void
     */
    public function hello($prenom = "anonyme", $age = 0)
    {
        return $this->render('hello.html.twig', [
            'prenom' => $prenom,
            'age' => $age
        ]); 
    }

    /**
     * @Route("/", name="homepage")
     */
    public function home()
    {
        $names = ['Lior' => 31, 'Joseph' => 12, 'Anne' => 55];

        return $this->render('home.html.twig', [
            'title' => 'Bonjour à tous',
            'age' => 11,
            'names' => $names
        ]);
    }
}