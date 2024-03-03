<?php

require_once 'Modele/Billet.php';
require_once 'Modele/Modele.php';
/**
 * Fournit les services d'accès aux genres musicaux 
 * 
 * @author Zahraoui Saad
 */
class logiin extends Modele {

    private $billet;

    public function __construct() {
        $this->billet = new Billet();
    }
// Renvoie la liste des commentaires associés à un billet
    public function login($login, $pass) {
        $sql = 'select auteur_name as auteur FROM t_auteur WHERE login=? AND pass=?';
        $log = $this->executerRequete($sql, array($login, $pass));
        if ($log->rowCount() > 0){
            $_SESSION['currentUser'] = $login;
            $billets = $this->billet->getBillets();
            $vue = new Vue("accueil");
            $vue->generer(array('billets' => $billets));
            $res = $log->fetch();
            $auteur = $res[0];
            return $auteur;
        }
        else
        {
            echo "Login Ou mot de pass incorrect!!";
        }
      
    }
}