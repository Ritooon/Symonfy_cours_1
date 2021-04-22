<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Arme;

class ArmeController extends AbstractController
{
    /**
     * @Route("/armes", name="armes")
     */
    public function index(): Response
    {
        Arme::creerArme();
        return $this->render('arme/armes.html.twig', [
            'armes' => Arme::$armes
        ]);
    }

    /**
     * @Route("/afficher_arme/{libelle}", name="afficher_arme")
     */
    public function afficher_arme($libelle): Response
    {
        Arme::creerArme();
        $arme = Arme::getArmeParLibelle($libelle);
        return $this->render('arme/arme.html.twig', [
            'arme' => $arme
        ]);
    }
}
