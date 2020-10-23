<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Language" content="pt-br">


      
    <script language="JavaScript" type="text/javascript" src="cidades-estados-1.4-utf8.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>teste</title>
      
</head>
    <body>
<!-- Topo da Página -->      
      <p></p>
 <!-- Fluid Jumbotron --> 
 <div class="container-fluid">    
 <form class="was-validated"  name="regform" method="POST" action="calcula.php" onsubmit="return valida()">
 
  <!-- Número da Solicitação  e Data da Solicitação -->    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Número da Solicitação">Nome Completo</label>
      <input type="text" name="nome" data-minlength="5"  class="form-control" id="cnome" placeholder="Nome Completo" required minlength="3">
      <div class="invalid-feedback">Favor preencher o preencher o nome Completo</div>
  </div>
      
  <div class="form-group col-md-6">
      <label for="Número da Solicitação">Data de Nascimento</label>
      <input type="date" name="dataNasc" data-minlength="5"  class="form-control" id="cnome" placeholder="Data da Solicitação" required minlength="3">
    <div class="invalid-feedback">Favor preencher a data de Nascimento</div> 
  </div>
      </div>
    <?php
        
     $data=date('y/m/d', strtotime($dataNasc));
     $solicitao=date('y/m/d', strtotime($dataSol));

?>
 
    <div class="form-row">
    <div class="form-group col-md-6">
     <input type="submit" class="btn btn-primary" Value="Cadastrar">
    </div>
   </div>
   
   </form>
      </div>     
 </div>
      
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>