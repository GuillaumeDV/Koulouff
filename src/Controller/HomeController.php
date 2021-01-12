<?php

namespace App\Controller;

use App\Repository\InformationRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(InformationRepository $information): Response
    {
        var_dump($information->findAll());
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'information' => $information->findAll(),
        ]);
    }
}
