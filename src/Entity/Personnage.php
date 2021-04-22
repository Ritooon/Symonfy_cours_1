<?php

namespace App\Entity;

class Personnage {
    private $nom;
    private $age;
    private $sexe;
    private $caracteristiques = [];

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
        new Personnage('hector', 25, 'M', ['force' => 5, 'agil' => 3, 'intel' => 1]);
        new Personnage('lena', 23, 'F', ['force' => 3, 'agil' => 3, 'intel' => 3]);
        new Personnage('robot', 99, '', ['force' => 5, 'agil' => 1, 'intel' => 8]);
        new Personnage('zombie', 99, '', ['force' => 2, 'agil' => 1, 'intel' => 1]);
    }

    public function getNom() { return $this->nom; }
    public function getAge() { return $this->age; }
    public function getSexe() { return $this->sexe; }
    public function getCaracteristiques() { return $this->caracteristiques; }

    public function setNom($Nom) {
        $this->Nom = $Nom;
        return $this;
    }

    public function setAge($age) {
        $this->age = $age;
        return $this;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
        return $this;
    }

    public function setCaracteristiques($caracteristiques) {
        $this->caracteristiques = $caracteristiques;
        return $this;
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