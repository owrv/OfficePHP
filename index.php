
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Teste</title>
  </head>
  <body>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Comparar arquivos</h1>
      <form action="identificarAlteracaoDeArquivo.php" method="post" enctype="multipart/form-data">
        <div class="form-group row">
          <label for="inputArquivoA" class="col-sm-2 col-form-label">Pasta de Arquivo Principal</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputArquivoA" name="inputArquivoA" placeholder="C:\Users\Usuario\Downloads">
          </div>
        </div> 
        <div class="form-group row">
          <label for="inputArquivoB" class="col-sm-2 col-form-label">Pasta de Arquivos a Comparar</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputArquivoB" name="inputArquivoB" placeholder="C:\Users\Usuario\Documents">
          </div>
        </div> 
        <button type="submit" class="btn btn-primary">Comparar</button>
        <!-- <a href="" class="btn btn-primary">Comparar</a> -->
      </form>
    </div>
  </div>
  <hr>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>