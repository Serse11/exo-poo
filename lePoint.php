<?php 
class Point {
    public int $x; 
    public int $y;
    public int $tx;
    public int $ty;

    public function __construct(int $x, int $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }

    public function affiche() {
        return "$this->x $this->y";
    }

    public function translateTx ($tx) {
        $this->tx = $tx;
        return $this->tx + $this->x;
    }

    public function translateTy ($ty) {
        $this->ty = $ty;
        return $this->ty + $this->y;
    }
}

$p1 = new Point(5, 4); 
$p2 = new Point(10, 14);
echo "{$p1 -> affiche()}<br/>";
echo "{$p1 -> translateTx(20)}"." ";
echo "{$p1 -> translateTy(20)}<br/>";
echo "{$p2 -> affiche()}<br/>";
?>