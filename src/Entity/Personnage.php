<?php

namespace App\Entity;

class Personnage {
    public $nom;
    public $age;
    public $sexe;
    public $caracteristiques = [];

    public static $personnages = [];

    public function __construct($nom, $age, $sexe, $caracteristiques)
    {
        $this->nom = $nom;   
        $this->age = $age;   
        $this->sexe = $sexe;   
        $this->caracteristiques = $caracteristiques;   
        self::$personnages[] = $this;
    }

    public static function creerPersonnages()
    {
        $p1 = new Personnage('hector', 25, 'M', ['force' => 5, 'agil' => 3, 'intel' => 1]);
        $p2 = new Personnage('lena', 23, 'F', ['force' => 3, 'agil' => 3, 'intel' => 3]);
        $p3 = new Personnage('robot', 99, '', ['force' => 5, 'agil' => 1, 'intel' => 8]);
        $p4 = new Personnage('zombie', 99, '', ['force' => 2, 'agil' => 1, 'intel' => 1]);
    }

    public static function getPersonnageParNom($nom)
    {
        foreach(self::$personnages as $personnage)
        {
            if($personnage->nom === $nom)
            {
                return $personnage;
            }
        }
    }
}