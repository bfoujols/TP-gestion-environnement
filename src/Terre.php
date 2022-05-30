<?php

namespace TPGE;

class Terre extends Plante implements PlanteInterface
{
    private $typeTerre;
    private $orientation;

    public function __construct($nomPlante, $couleurPlante, $comestiblePlante, $typeTerre, $orientation)
    {
        parent::__construct($nomPlante, $couleurPlante, $comestiblePlante);
        $this->typeTerre = $typeTerre;
        $this->orientation = $orientation;
    }

    /**
     * @return mixed
     */
    public function getTypeTerre()
    {
        return $this->typeTerre;
    }

    /**
     * @return mixed
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    public function __toString(): string
    {
        return "NOM DE LA PLANTE = " . $this->nom;
    }

    public function getNomPlante(): string
    {
        return "NOM DE LA PLANTE = " . $this->nom . " Class::Terre";
    }
}