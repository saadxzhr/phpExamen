<?php

require_once 'Modele/Billet.php';
require_once 'Vue/Vue.php';

class ControleurAccueil {

    private $billet;

    public function __construct() {
        $this->billet = new Billet();
    }

// Affiche la liste de tous les billets du blog
    public function accueil() {
        $billets = $this->billet->getBillets();
        If(isset($_SESSION['currentUser'])){
            $vue = new Vue("accueil");
            $vue->generer(array('billets' => $billets));
        }else {
            $vue = new Vue("Login");
            $vue->generer(array('billets' => $billets));
        }
       
    }

}

