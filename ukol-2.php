<?php

class GeometrickyUtvar
{
    protected $pocetStran;

    public function __construct( $pocetStran)
    {
        $this->pocetStran = $pocetStran;
    }

    public function ziskejPocetStran()
    {
        return $this->pocetStran;
    }
}

class Ctverec extends GeometrickyUtvar
{
    private $delkaStrany;

    public function __construct(int $delkaStrany)
    {
        $this->delkaStrany = $delkaStrany;
        parent::__construct(4);
    }
    public function ziskejObvod()
    {
        return $this->delkaStrany*$this->pocetStran;
    }
}

$ctverec = new Ctverec(3);


class Trojuhelnik extends GeometrickyUtvar
{
    private $delkaA;
    private $delkaB;
    private $delkaC;

    public function __construct(int $delkaA, int $delkaB, int $delkaC)
    {
        $this->delkaA = $delkaA;
        $this->delkaB = $delkaB;
        $this->delkaC = $delkaC;
        parent::__construct(3);
    }

    public function ziskejObvod()
    {
        return $this->delkaA+$this->delkaB+$this->delkaC;
    }
}

$trojuhelnik = new Trojuhelnik(2, 4, 5);

echo "<h3> Čtverec </h3><br>";
echo "Počet stran: ".$ctverec->ziskejPocetStran()."<br>";
echo "Obvod: ".$ctverec->ziskejObvod();

echo "<h3> Trojuhelník </h3><br>";
echo "Počet stran: ".$trojuhelnik->ziskejPocetStran()."<br>";
echo "Obvod: ".$trojuhelnik->ziskejObvod();