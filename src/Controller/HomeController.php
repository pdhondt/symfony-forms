<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/test', name: 'test')]
    public function testpage(): Response
    {

        $tests = [
            'This is the first test',
            'This is the second test',
            'This is the final test'
        ];

        return $this->render('home/test.html.twig', [
            'test_text' => 'This is some example text',
            'tests' => $tests,
        ]);
    }
}
