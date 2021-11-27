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
        <a href="#">Sing in</a>
    </div>
    <div class="main">
        <div class="login">
            <h1>Welcome to PokeShop!</h1>
            <form>
                <label>
                    Your name<br/>
                    <input
                        type="name"
                        id="name"
                        name="name"
                        required
                    />
                </label>
                <label>
                    Your password<br/>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                    />
                </label>
                <button type="submit">Sign in</button>
            </form>
            <span>
                Forgot your password?
                <a href="#">Let&apos;s get it back!</a>
            </span>
            <span>
                Not a member yet?
                <a href="#">Sign up!</a>
            </span>
        </div>
    </div>
';

$generator = new LayoutGenerator([
    'title' => "PokeShop",
    'description' => 'Online shop for a lot of Pokemon stuff!'
], $content, 'layout.php');
print $generator;
