<?php

namespace TPGE;

class Parc
{
    private $id;
    private $nom;
    private $region;
    private $hectare;
    private $tabPlante = [];

    public function __construct($idExt, $nomExt, $regionExt, $hectareExt)
    {
        $this->id = $idExt;
        $this->nom = $nomExt;
        $this->region = $regionExt;
        $this->hectare = $hectareExt;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function setTabPlante($objPlante)
    {
        $this->tabPlante[] = $objPlante;
    }

    public function getTabPlante(): array
    {
        return $this->tabPlante;
    }

    public function getListPlante() {
        foreach ($this->tabPlante as $item) {
            echo $item->getNomPlante() . "<br>";
        }
    }

    public function __toString()
    {
        return  "NOM = " . $this->nom .
                " REGION = " . $this->region .
                " HECTARE = " . $this->hectare .
                " PLANTES = " . implode(" ", $this->tabPlante);
    }
}