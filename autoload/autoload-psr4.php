<?php
/**
 * Anderson Lima
 * andersonelima@gmail.com
 */

function carregar(string $nomeCompleto)
{
    /**
     * Nome da raiz do namespace, que definino nos arquivos de classes. 
     */
    $nsRaiz = 'App\\';

    /**
     * É o local onde esta a aplicação.
     */
    $diretorioBase = __DIR__ . '/../src/';
   
    /**
     * Remove parte no namespace ficando apenas o que tem depois do App/
     */
    $tamanhoNsRaiz = strlen($nsRaiz);

    /**
     * Se o namespace raiz for diferente do esperado,
     * o codigo deve ser encerrado, para não apresentar erro.
     */
    $nsRaizRecebido = substr($nomeCompleto, 0, $tamanhoNsRaiz);
    
    if ($nsRaiz !== $nsRaizRecebido)
    {
        die("ERROR NO NAMESPACE RAIZ!");
    }

    $caminhoRelativo = substr($nomeCompleto, $tamanhoNsRaiz);

    /**
     * Define o caminho dos arquivos de classe.
     */
    $caminhoArquivo = $diretorioBase . str_replace('\\', '/', $caminhoRelativo) . '.php';

    /**
     * Verifica se o arquivo de classe chamado existe.
     */
    if (file_exists($caminhoArquivo))
    {
        require $caminhoArquivo;
    }
}

/**
 * Carrega automaticamento o arquivo de classe.
 */
spl_autoload_register('carregar');