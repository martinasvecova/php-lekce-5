<?php

interface TrojrozmernyObrazecInterface
{
    public function ziskejObjem ();
    public function ziskejPovrch ();
}


class Kvadr implements TrojrozmernyObrazecInterface
{
    private $a;
    private $b;
    private $c;

    public
    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function ziskejObjem()
    {
        return $this->a * $this->b * $this->c;
    }

    public function ziskejPovrch()
    {
        return 2*($this->a*$this->b + $this->a*$this->c + $this->b*$this->c);
    }
}

class Krychle implements TrojrozmernyObrazecInterface
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function ziskejObjem()
    {
        return pow($this->a, 3);
    }

    public function ziskejPovrch()
    {
        return 6*pow($this->a, 2);
    }
}

class Koule implements TrojrozmernyObrazecInterface
{
    private $r;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function ziskejObjem()
    {
        return (4/3)*pi()*pow($this->r, 3);
    }

    public function ziskejPovrch()
    {
        return 4*pi()*pow($this->r, 2);
    }
}

class Jehlan implements TrojrozmernyObrazecInterface
{
    private $a;
    private $v;

    public function __construct($a, $v)
    {
        $this->a = $a;
        $this->v = $v;
    }

    public function ziskejObjem()
    {
        return (1/3)*pow($this->a, 2)*$this->v;

    }

    public function ziskejPovrch()
    {
        return pow($this->a, 2) + 2*$this->a*sqrt((pow(($this->a/2), 2)+(pow($this->v, 2))));
    }
}


$kvadr = new Kvadr(2, 3, 7);

echo "Kvádr má objem " . $kvadr->ziskejObjem() . " cm&sup3.";;
echo "<br>";
echo "Kvádr má povrch ". $kvadr->ziskejPovrch() . " cm&sup2.";
echo "<br>";

$krychle = new Krychle(5);

echo "Krychle má objem " . $krychle->ziskejObjem() . " cm&sup3.";
echo "<br>";
echo "Krychle má povrch ". $krychle->ziskejPovrch() . " cm&sup2.";
echo "<br>";

$koule = new Koule (6);

echo "Koule má objem " . round($koule->ziskejObjem()) . " cm&sup3.";
echo "<br>";
echo "Koule má povrch ". round($koule->ziskejPovrch()) . " cm&sup2.";
echo "<br>";

$jehlan = new Jehlan (3, 4);

echo "Jehlan má objem " . round($jehlan->ziskejObjem()) . " cm&sup3.";
echo "<br>";
echo "Jehlan má povrch ". round($jehlan->ziskejPovrch()) . " cm&sup2.";
echo "<br>";
