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
    </div>
    <div class="main">
        <img class="welcomeBlockImg"src="assets/images/pokeball.png" alt="PokeShop logo" />
        <div class="welcomeBlockText">
            <h2>Welcome to PokéShop</h2>
            <span>A lot of Pokémon stuff is waiting for you!</span><br/><br/><br/><br/>
            <a href="/catalog.php">Start shopping</a>
        </div>
    </div>
';

$generator = new LayoutGenerator([
    'title' => "PokeShop",
    'description' => 'Online shop for a lot of Pokemon stuff!'
], $content, 'layout.php');
print $generator;
