<?php

namespace TPGE;

class Plante
{
    protected $nom;
    protected $couleur;
    protected $comestible;

    public function __construct($nomPlante, $couleurPlante, $comestiblePlante)
    {
        $this->nom = $nomPlante;
        $this->couleur = $couleurPlante;
        $this->comestible = $comestiblePlante;
    }
}