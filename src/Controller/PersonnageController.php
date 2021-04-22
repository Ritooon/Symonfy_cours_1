<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Personnage;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig');
    }

    /**
     * @Route("/personnages", name="personnages")
     */
    public function personnages(): Response
    {
        Personnage::creerPersonnages();

        return $this->render('personnage/personnages.html.twig', [
            "personnages" => Personnage::$personnages
        ]);
    }

    /**
     * @Route("/personnages/{nom}", name="afficher_personnage")
     */
    public function afficher_personnage($nom): Response
    {
        Personnage::creerPersonnages();
        $personnage = Personnage::getPersonnageParNom($nom);
        return $this->render('personnage/personnage.html.twig', [
            "personnage" => $personnage
        ]);
    }
}
