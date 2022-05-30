<?php

namespace TPGE;

class Aquatique extends Plante implements PlanteInterface
{
    private $typeEau;
    private $pollution;

    public function __construct($nomPlante, $couleurPlante, $comestiblePlante, $typeEau, $pollution)
    {
        parent::__construct($nomPlante, $couleurPlante, $comestiblePlante);
        $this->typeEau = $typeEau;
        $this->pollution = $pollution;
    }

    /**
     * @return mixed
     */
    public function getTypeEau()
    {
        return $this->typeEau;
    }

    /**
     * @return mixed
     */
    public function getPollution()
    {
        return $this->pollution;
    }

    public function __toString(): string
    {
        return "NOM DE LA PLANTE = " . $this->nom;
    }

    public function getNomPlante(): string
    {
        return "NOM DE LA PLANTE = " . $this->nom . " Class::Aquatique";
    }
}