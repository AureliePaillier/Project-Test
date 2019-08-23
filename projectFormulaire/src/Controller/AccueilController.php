<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function index()
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'nous vous souhaitons une belle découverte de notre site de photos.',
            //'prenom' => 'Aurélie',
            //'nom' => 'Paillier',
        ]);
    }
}
