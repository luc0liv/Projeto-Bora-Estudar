<!--Conexao do banco de dados--> 
<?php include_once('conexaobd.php');?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="exemplo10-modal.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
    <title>Página inicial</title>
</head>
<body>
    
    <header>
        <div class="header">
            <div class="logo">
                <a href="index.php"><img class="logoimg" src="./assets/img/Asset 1.png"></a>
                
            </div>

            <div class="menu">
                <img class="menu-opener" src="./assets/img/menu.png"/>
                <nav>
                    <ul>
                        <li><a href="index.php">Página inicial</a></li>
                        <li><a href="comoFunciona.php">Como Funciona</a></li>
                        <li><a href="faleConosco.php">Fale Conosco</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

   
        <!--SECTION BANNER-->
    
     <section class="banner">
        <div class="sliders">
            <div class="slide">
                <div class="slideArea">

                    <!-- <div class="botao">
                        <a href="">Login</a> 
                    </div> -->

                    <!---------------------------->

                    <!-- Botão para acionar modal -->
<button type="button" class="botao" data-toggle="modal" data-target="#modalExemplo">
    Login
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Bora Estudar ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="cadastro">
                <form action="/action_page.php" method="post">
                    <!-- <div class="imgcontainer">
                      <img src="#" alt="Avatar" class="avatar">
                    </div> -->
                    <div class="container">
                      <label for="uname"><b>Login</b></label>
                      <input type="text" placeholder="Seu nome" name="uname" required>
                  
                      <label for="psw"><b>Senha</b></label>
                      <input type="password" placeholder="Sua senha" name="psw" required>
                          
                      <button type="submit">Login</button>
                      <label>
                        <input type="checkbox" checked="checked" name="remember"> Manter-se conectado
                      </label>
                    </div>

                  </form>
             </div>
        </div>
        <div class="modal-footer">
          <a class="btn btn-primary"  href="./cadastroaluno.php">Cadastro Aluno</a>
          <a class="btn btn-primary"  href="./cadastromonitor.php">Cadastro Monitor</a>
          <button type="button" class="btn btn-primary">Esqueceu a senha?</button>
        </div>
      </div>
    </div>
  </div>

  <!-- final modal-->

                    <!---------------------------->
                    
                </div>
            </div>
            <div class="slide">
                ...2
            </div>
            <div class="slide">
                ...3
            </div>
        </div>
        <div class="sliders_pointers">
            <div class="pointer"></div>
            <div class="pointer"></div>
            <div class="pointer"></div>
        </div>
    </section>

        

                        



    <!--Inicio do rodapé-->
    <footer>
        <div id="follow">Siga-nos em nossas redes sociais:</div>
        <div class="social">
            <a href="https://www.youtube.com/"><img src="./assets/img/ytb.png" class="iconSocial" alt="youtube"></a>

            <a href="https://twitter.com/home"><img src="./assets/img/twtr.png" class="iconSocial" alt="twitter"></a>

            <a href="https://www.instagram.com"><img src="./assets/img/insta.png" class="iconSocial" alt="insta"></a>

            <a href="https://www.facebook.com"><img src="./assets/img/fbk.png" class="iconSocial" alt="facebook"></a>
        </div>
    </footer>
    <!--Fim do rodapé-->

</body>
</html>