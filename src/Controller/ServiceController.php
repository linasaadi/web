<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }
    ///fonction 2 
    #[Route('/showService/{nom}', name: 'showService')]
    public function showService ($nom): Response
    {
        return $this->render('service/showService.html.twig', [
            'n' => $nom ,
        ]);
    }
}
