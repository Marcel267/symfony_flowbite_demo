<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'title' => 'Home',
        ]);
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig', [
            'title' => 'About',
        ]);
    }

    #[Route('/service', name: 'service')]
    public function service(): Response
    {
        return $this->render('home/service.html.twig', [
            'title' => 'Service',
        ]);
    }

    #[Route('/pricing', name: 'pricing')]
    public function pricing(): Response
    {
        return $this->render('home/pricing.html.twig', [
            'title' => 'Pricing',
        ]);
    }

    // #[Route('/test', name: 'app_test')]
    // public function test(): Response
    // {
    //     return $this->render('home/index.html.twig', [
    //         'controller_name' => 'TEST',
    //     ]);
    // }
}
