<?php
Class Vehicule{
    protected $Nb_passager;
    protected $Nb_Km;

    public function deplacer(){
        echo "roule...";
    }

    public function setPassager($passager){
      return  $this->Nb_passager=$passager;
    }

    public function getPassager(){
        return  $this->Nb_passager;
    }

    
    public function monter($passager){
        return  $this->Nb_passager+=$passager;
    }

    public function descendre($passager){
        return  $this->Nb_passager-=$passager;
    }

    public function setKm($km){
        return  $this->Nb_Km=$km;
    }

    public function getKm(){
        return  $this->Nb_Km;
    }

    public function avance($km){
        return  $this->Nb_Km+=$km;
    }

}