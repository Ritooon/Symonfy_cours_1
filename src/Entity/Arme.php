<?php

namespace App\Entity;

class Arme
{
    private $libelle;
    private $description;
    private $degats;

    public static $armes = [];

    public function __construct($libelle, $description, $degats)
    {
        $this->libelle = $libelle;
        $this->description = $description;
        $this->degats = $degats;

        self::$armes[] = $this;
    }

    public function getLibelle() { return $this->libelle; }
    public function getDegats() { return $this->degats; }
    public function getDescription() { return $this->description; }

    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    public function setDegats($degats) {
        $this->degats = $degats;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public static function creerArme()
    {
        new Arme('épée', 'Une arme tranchante et maniable', 10);
        new Arme('arc', 'Redoutable si tant est que l\'on soit à distance', 15);
        new Arme('hache', 'Une arme tranchante et effectuant de lourds dommages. Maniabilité réduite', 20);
    }

    public static function getArmeParLibelle($libelle)
    {
        foreach(self::$armes as $arme)
        {
            if($arme->libelle === $libelle)
            {
                return $arme;
            }
        }
    }    
}