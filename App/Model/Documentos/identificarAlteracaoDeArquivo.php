<?php

/*
    Esta página ira conter as funções de verificação de arquivos novos
    Existira uma pagina onde vai ser verificado os arquivos que foram encontrados por está página com uma nova checagem
*/

class identificarAlteracaoDeArquivo {
    
    public function nome()
    {
        $dir = 'img/';
        $arquivos; // recebe um array com os arquivos existentes.
        $conteudoArquivo; // recebe um array de conteúdo de um arquivo.
        $ArquivosAntigos = array("ConnectWare.png", "IMG_20200712_111514.jpg");
        

        if (!file_exists($dir)) {
            echo "O arquivo ou diretório " . $dir . " não existem!";
            
        } else {

            $arquivos = scandir($dir);
            
            // armazena o nome dos arquivos no diretório
            foreach ($arquivos as $key => $value) {
                if ($value != ".." && $value != ".") {
                    $ArquivosNovos[] = $value;
                }
            }

            // identifica se os arquivos são semelhantes
            $result = array_diff($ArquivosNovos, $ArquivosAntigos);

            // imprime arquivos que são diferentes
            foreach ($result as $key => $value) {
                echo "$value<br>";
            }
        }

    }

}

$instanciando = new identificarAlteracaoDeArquivo();
$instanciando->nome();