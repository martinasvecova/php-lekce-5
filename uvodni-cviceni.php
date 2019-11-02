<?php

class Order
{
    public $products; //public je modifikátor, ktorý umožnuje modifikovať komukoľvek
    public $price;
    public $customer;

    public function __construct(array $products, $price, $customer) //array - PHP si začne hlídat, že tam vložím len pole
    {
        $this->products = $products;
        $this->price = $price;
        $this->customer = $customer;
    }

    public function productCount()
    {
        return count($this->products);
    }
    public function echoProductCount()
    {
        echo $this->productCount();
    }
}

$order = new Order(['pračka AEG', 'Žehlička Zanussi'], 12000, 'Josef Novák');

$order->echoProductCount();
echo "<br>";

echo $order->customer . "<br>";

foreach ($order->products as $item) {
    echo $item . "<br>";
}


$order->price = $order->price - 100;
