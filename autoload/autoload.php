<?php

/**
 * Nesse autoload funciona sem namespace. 
 * Não pode ter namespace nos arquivos de classe
 */
function carregar(string $nomeClasse)
{
    $caminhoCompleto = __DIR__ . "/../src/Classes/{$nomeClasse}.php";

    if (file_exists($caminhoCompleto))
    {
        require $caminhoCompleto;
    }
}

spl_autoload_register('carregar');