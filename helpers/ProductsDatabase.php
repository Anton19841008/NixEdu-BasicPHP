<?php

class ProductsDatabase
{
    private $products = array(
        array(
            'name' => 'Charmander',
            'price' => '$14.99',
            'quantity' => 59,
            'image' => 'assets/images/charmander.jpg'
        ),
        array(
            'name' => 'Eevee',
            'price' => '$14.99',
            'quantity' => 40,
            'image' => 'assets/images/eevee.jpg'
        ),
        array(
            'name' => 'Lapras',
            'price' => '$15.99',
            'quantity' => 60,
            'image' => 'assets/images/lapras.jpg'
        ),
        array(
            'name' => 'Dratini',
            'price' => '$13.99',
            'quantity' => 52,
            'image' => 'assets/images/dratini.jpg'
        ),
        array(
            'name' => 'Jigglypuff',
            'price' => '$12.99',
            'quantity' => 36,
            'image' => 'assets/images/jigglypuff.jpg'
        ),
        array(
            'name' => 'Pikachu',
            'price' => '$14.99',
            'quantity' => 20,
            'image' => 'assets/images/pikachu.jpg'
        ),
        array(
            'name' => 'Vulpix',
            'price' => '$13.99',
            'quantity' => 29,
            'image' => 'assets/images/vulpix.jpg'
        ),
        array(
            'name' => 'Ponyta',
            'price' => '$16.99',
            'quantity' => 42,
            'image' => 'assets/images/ponyta.jpg'
        ),
        array(
            'name' => 'Sword and Shield',
            'price' => '$23.99',
            'quantity' => 40,
            'image' => 'assets/images/g1.jpg'
        ),
        array(
            'name' => 'Let\'s Go Eevee',
            'price' => '$23.99',
            'quantity' => 31,
            'image' => 'assets/images/g2.jpg'
        ),
        array(
            'name' => 'Hoodie',
            'price' => '$29.99',
            'quantity' => 50,
            'image' => 'assets/images/m6.jpg'
        ),
        array(
            'name' => 'Ponyta T-Shirt',
            'price' => '$23.99',
            'quantity' => 50,
            'image' => 'assets/images/m7.jpg'
        ),
        array(
            'name' => 'Gen VII Backpack',
            'price' => '$29.99',
            'quantity' => 50,
            'image' => 'assets/images/m8.jpg'
        ),
        array(
            'name' => 'Gen VII T-Shirt',
            'price' => '$23.99',
            'quantity' => 50,
            'image' => 'assets/images/m9.jpg'
        )
    );

    public function __construct()
    {
    }

    public function get()
    {
        return $this->products;
    }

    public function show($product)
    {
        $result = null;
        foreach ($this->products as $value => $key) {
            if ($key['name'] == $product) {
                $result = $this->products[$value];
                break;
            }
        }
        if (!$result) {
            header("HTTP/1.1 404 Not Found");
            exit;
        }
        return $result;
    }
}
