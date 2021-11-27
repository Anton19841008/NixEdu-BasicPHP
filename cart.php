<?php

spl_autoload_register(function ($class) {
    include_once __DIR__ . '\/helpers/' . $class . '.php';
});

$content = '
    <div class="header">
        <div class="logo">
            <img src="assets/images/pokeball.png" alt="PokeShop logo">
            <span>PokéShop</span>
        </div>
        <div class="info">
            <a href="/">ABOUT</a>
            <a href="/catalog.php">CATALOG</a>
            <a href="https://github.com/PAXANDDOS">CONTACT</a>
        </div>
        <div class="search">
            <input type="search" placeholder="Search Pikachu, Plush, T-Shirts...">
        </div>
        <div class="user">
            <a href="/cart.php">CART</a>
            <a href="/signin.php">SIGN IN</a>
        </div>
    </div>
    <div class="breadcrumbs">
        <a href="/">Home</a>
        <span>/</span>
        <a href="#">Cart</a>
    </div>
    <div class="main">
        <div class="cartList">
            <div class="cartItem">
                <img src="assets/images/eevee.jpg">
                <h3>Eevee plushie</h3>
                <span>Remove</span>
            </div>
            <div class="cartItem">
                <img src="assets/images/charmander.jpg">
                <h3>Charmander plushie</h3>
                <span>Remove</span>
            </div>
            <div class="cartItem">
                <img src="assets/images/dratini.jpg">
                <h3>Dratini plushie</h3>
                <span>Remove</span>
            </div>
            <div class="cartConfirm">
                <h2>Proceed to payment</h2>
            </div>
        </div>
    </div>
';

$generator = new LayoutGenerator([
    'title' => "PokeShop",
    'description' => 'Online shop for a lot of Pokemon stuff!'
], $content, 'layout.php');
print $generator;
