<?php
class hero extends personnage
{
    /*Faire une classe nommée hero qui hérite de la classe personnage, avec les propriétés privées vie, force,
    magie, agilite et intelligence*/

    const MY_HERO = "Pango";

    private $vie;
    private $force;
    private $magie;
    private $agilite;
    private $intelligence;


    function __construct(
        $vie,
        $force,
        $magie,
        $agilite,
        $intelligence
    ) {

        $this->vie = $vie;
        $this->force = $force;
        $this->magie = $magie;
        $this->agilite = $agilite;
        $this->intelligence = $intelligence;
    }
    /* avec les méthodes publiques dites finales
    getVie, getForce, getMagie, getAgilite et getIntelligence*/

    public function getVie()
    {
        return $this->vie;
    }

    public function getForce()
    {
        return $this->force;
    }

    public function getMagie()
    {
        return $this->magie;
    }

    public function getAgilite()
    {
        return $this->agilite;
    }

    public function getIntelligence()
    {
        return $this->intelligence;
    }
}
