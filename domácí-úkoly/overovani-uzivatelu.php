<?php

class Uzivatel
{
    public $jmeno;
    public $heslo;

    public function __construct($jmeno, $heslo)
    {
        $this->jmeno = $jmeno;
        $this->heslo = $heslo;
    }

    public function overeni($jmeno,$heslo)
    {
        return ($jmeno === $this->jmeno && $heslo === $this->heslo);
    }

    public function ziskejJmeno()
    {
        return $this->jmeno;
    }
}



class Prihlasovani
{
    private $prihlaseniUzivatele = [];


    public function prihlas (Uzivatel $uzivatel, $jmeno,  $heslo)
    {
        if ($uzivatel->overeni($jmeno, $heslo) == true)
        {
            $this->prihlaseniUzivatele[] = $jmeno;
        }
    }


    public function zobrazPrihlaseneUzivatele ()
    {
        echo "Prihlaseni uzivatele: ". implode(',', $this->prihlaseniUzivatele).'<br>';
    }
}


$josef = new Uzivatel("josef", "josef1234");


$prihlasovani = new Prihlasovani();

$prihlasovani->zobrazPrihlaseneUzivatele();

$prihlasovani->prihlas($josef, "josef", "josef1234");
$prihlasovani->zobrazPrihlaseneUzivatele();

$karel = new Uzivatel('karel', 'karelABC');

$prihlasovani->prihlas($karel, 'karel', 'XYZ');
$prihlasovani->zobrazPrihlaseneUzivatele();

$prihlasovani->prihlas($karel, 'karel', 'karelABC');
$prihlasovani->zobrazPrihlaseneUzivatele();


