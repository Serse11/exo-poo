<?php 
class Compte {
    public int $somme;
    public int $taux;
    public int $depot;

    public function __construct($somme, $taux) {
        $this->somme = $somme;
        $this->taux = $taux; 
    }

    public function affiche() {
        return "Compte ($this->somme €, $this->taux %)";
    }
    public function depots ($depot) {
        $this->depot = $depot;
        return $this->somme + $this->depot;
    }
}


$user1 = new Compte(19000, 3);
echo "{$user1->affiche()}<br/>";
echo "{$user1->depots(20000)}";
?>