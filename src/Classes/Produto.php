<?php

/**
 * Usando o autoload simples não usar namespace.
 */
namespace App\Classes;

class Produto{

    public function __construct()
    {
        echo 'Construtor de Produto';    
    }
}