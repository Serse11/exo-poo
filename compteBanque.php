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
        return "Compte ($this->somme €, $this->taux%)";
    }
    public function depots ($depot) {
        $this->depot = $depot;
        return $this->somme + $this->depot;
    }
    public function retrait($retrait) {
        $this->retrait = $retrait;
        if($this->somme > $this->retrait) {
            return ($this->depot + $this->somme) - $this->retrait;
        } else {
            return "vous ne pouvez pas retirer";
        }
    }

    public function interets() {
        return ($this->taux * $this->somme / 100) + ($this->depot + $this->somme);
    }
}


$user1 = new Compte(19000, 5);
echo "{$user1->affiche()}<br/>";
echo "{$user1->depots(20000)}<br/>";
echo "{$user1->retrait(4000)}<br/>";
echo "{$user1->interets()}";
?>