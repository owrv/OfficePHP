<?php

/*
    Esta página ira conter as funções de verificação de arquivos novos
    Existira uma pagina onde vai ser verificado os arquivos que foram encontrados por está página com uma nova checagem
*/

class identificarAlteracaoDeArquivo {
    
    public function nome()
    {
        $dir1 = $_POST['inputArquivoA'];
        $dir2 = $_POST['inputArquivoB'];
        $arquivoA; // recebe um array com os arquivos existentes.
        $conteudoArquivo; // recebe um array de conteúdo de um arquivo.
        

        if (!file_exists($dir1)) {
            echo "<h1> O arquivo ou diretório principal " . $dir1 . " não existem!</h1>";
        } 

        if (!file_exists($dir2)) {
            echo "<h1>O arquivo ou diretório de checagem " . $dir2 . " não existem!</h1>";
        } 

        $arquivoA = scandir($dir1);
        $arquivoB = scandir($dir2);

        // armazena o nome dos arquivos no diretório
        foreach ($arquivoA as $key => $value) {
            echo "Arquivo $key = $value <br>";
            if ($value != ".." && $value != ".") {
                $ArquivosNovos[] = $value;
            }
        }
        ?>
            <hr>
        <?php

        // identifica se os arquivos são semelhantes
        $result = array_diff($arquivoA, $arquivoB);

        // imprime arquivos que são diferentes
        echo "<h1>Estes são os arquivos diferentes</h1>";
        foreach ($result as $key => $value) {
            echo "Arquivo $key = $value<br>";
        }
        

    }
 
}

$instanciando = new identificarAlteracaoDeArquivo();
$instanciando->nome();