<?php

class manipulaArquivo{
    public function leitura()
    {
        $arquivo = $_POST['inputArquivoA'];
        $delimitador = ";";

        if (!file_exists($arquivo)) {
            echo "Arquivo ou diretório informado não existe!";
        }
        $handle = fopen($arquivo, 'r');
        $row = 1;
        while ($data = fgetcsv($handle, 1000 , $delimitador)) {
            $num = count($data);
            echo "<p>" . $num . "º campo na linha $row: <br/></p>\n";
            $row++;
            for ($i=0; $i < $num; $i++) { 
                echo $data[$i] . "<br/>\n";
            }
        }
        fclose($handle);
    }

    public function escrita()
    {
        $data = file($_POST['inputArquivoA']);
        $destino = $_POST['inputDestino'];
        $maximoPorArquivo = $_POST['inputMaximoPorArquivo'];
        $nomeDoArquivo = $_POST['inputNomeArquivo'];
        $contagemValorTotalLinhasData = count($data);
        $arrayParticionado = array_chunk($data, $maximoPorArquivo);
        $qtdTotalArquivos = count($arrayParticionado);
        $row = 1;
        $linha = 0;
        $a = 0;
        $x = 1;
        $titulo = $data[0];
  
        do {
            if ( ($x = 1) or ($linha >= 10)){
                $row++;
                $nomeArquivo = "$destino/$nomeDoArquivo$row.csv";
                $x++;
                $linha = 0;
                $fp = fopen($nomeArquivo, 'w');
                fwrite($fp, $titulo);
            } 
            $x++;
            $gravar = $arrayParticionado[$a];
            $fp = fopen($nomeArquivo, 'a');
            fputcsv($fp, $gravar);
            $a++;
        } while ($a < $qtdTotalArquivos);
        fclose($fp);
    }
}

$instancia = new manipulaArquivo();
$instancia->escrita();