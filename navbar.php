<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/modal.css" type="text/css">
    
</head>
<body>
    
</body>
</html>

<nav class="navbar navbar-expand-lg navbar-light backg">
        <a class="navbar-brand" href="index.php"><img src="./assets/img/doatech.png" width="120" height="40"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item trick">
              <a class="nav-link text-white" href="index.php">Página inicial<span class="sr-only">(página atual)</span></a>
            </li>
            
            <li class="nav-item trick dropdown">
              <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cadastre-se
              </a>
              <div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
                <a class="dropdown-item bg-warning" href="./formescola.php">Cadastro escola</a>
                <a class="dropdown-item bg-info" href="./formaluno.php">Cadastro aluno</a>                
                <a class="dropdown-item bg-warning" href="./formdoador.php">Cadastro doador</a>
              </div>
            </li>
          <li class="nav-item trick">
              <a class="nav-link text-white" href="faleconosco.php">Fale Conosco</a>
            </li>
          </ul>
          <div class="form-inline my-2 my-lg-0">
           <a class="btn text-white btn-outline-warning my-2 my-sm-0"  role="button" type="button" 	 data-toggle="modal" data-target="#modalExemplo">Login</a>    
          </div>
        </div>
      </nav>

       <!-- Modal -->
  <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <a class="modal-title" id="exampleModalLabel"><img src="./assets/img/doatech.png" width="90" height="30"></a>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="cadastro">
                <form action="login.php" method="post" id="formModal">
                    <!-- <div class="imgcontainer">
                      <img src="#" alt="Avatar" class="avatar">
                    </div> -->
                    <div class="container" id="contModal">
                      <label for="uname"><b>E-mail</b></label>
                      <input type="text" placeholder="Seu e-mail" name="email" required>
                  
                      <label for="psw"><b>Senha</b></label>
                      <input type="password" placeholder="Sua senha" name="senha" required>
                          
                      <button class="" type="submit" name="enviar">Login</button>
                      
                    </div>

                  </form>
             </div>
        </div>
        <!--Precisa corrigir o posicionamento dos botões abaixo-->
        <div class="modal-footer">
        <a class="btn btn-primary"  href="./formescola.php">Cadastro Escola</a>
          <a class="btn btn-primary"  href="./formaluno.php">Cadastro Aluno</a>
          <a class="btn btn-primary "  href="./formdoador.php">Cadastro Doador</a>
          <button type="button" class="btn btn-info btn-sm">Esqueceu a senha?</button>

        </div>          

      </div>
    </div>
  </div>

  <!-- final modal-->

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>