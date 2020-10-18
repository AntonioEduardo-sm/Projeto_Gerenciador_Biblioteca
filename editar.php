<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="shortcut icon" href="favicon.ico" >
  <title>Opções</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<!-- Custom styles for button by-eduardo -->
    <link rel = "stylesheet" type = "text/css" href = "css/custom.css">

</head>
<body>
     <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar-primary">
  <div class="container">
    <a class="navbar-brand" href="index.php">Biblioteca</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Inicio
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="paginas/emprestimo.php">Livros</a>
        </li>
          <?php 
          if (isset($_SESSION['logado'])) {
            echo "
              <li class='nav-item'>
                <div class='btn-group'>
                    <button type='button' class='btn' id='buttonperson'>".$_SESSION['usuario']."
                    </button>
                    <button type='button' class='btn dropdown-toggle dropdown-toggle-split' id='buttonperson' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                      <span class='sr-only'>Dropdown</span>
                    </button>
                    <div class='dropdown-menu' id='dropperson'>
                      <a class='dropdown-item' href='editarusuario/editardados.php'>Opções</a>
                      <div class='dropdown-divider'></div>
                      <a class='dropdown-item' href='paginas/login.php?deslogar=1'>Sair</a>
                    </div>
                  </div>
              </li>";
              
          }else {
            echo "
              <li class='nav-item'>
                <a class='nav-link' href='paginas/login.php'>Logar</a>
              </li>";
          }
        ?>
      </ul>
    </div>
  </div>
</nav>
<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-10 p-b-10">
      <form class="login100-form validate-form" action="" method="POST">
        <span class="login100-form-title p-b-33">
          Editar
        </span>

        <div class="container-login100-form-btn m-t-10">
          <button class="login100-form-btn" name="bt1">
            Editar Usuário
          </button>
        </div><br>

        <?php 
          if (isset($_SESSION['tipo'])) {
                    echo "
                    <div class='container-login100-form-btn m-t-20'>
                  <button class='login100-form-btn' name='bt2'>
                    Inserir livro
                  </button>
                </div><br>
                    <div class='container-login100-form-btn m-t-20'>
                  <button class='login100-form-btn' name='bt3'>
                    Editar livros
                  </button>
                </div><br>
                    <div class='container-login100-form-btn m-t-20'>
              <button class='login100-form-btn' name='bt4'>
                Renovar emprestimo
              </button>
            </div><br>";
            
                  }else{
                  //echo "<div class='container-login100-form-btn m-t-20'>
            //  <button class='login100-form-btn' name='bt6'>
            //    Livros Agendados
            //  </button>
            //</div><br>";
                  }
        ?>
        
      </form>

    </div>
  </div>
</div>

  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>

<?php 
  if (isset($_POST['bt1'])) {
    echo "<script>window.location='editarusuario/editardados.php';</script>";
  }
  if (isset($_POST['bt2'])) {
    echo "<script>window.location='atualizarlivro/inserirlivro.php';</script>";
  }
  if (isset($_POST['bt3'])) {
    echo "<script>window.location='atualizarlivro/editarlivros.php';</script>";
  }
  if (isset($_POST['bt4'])) {
    echo "<script>window.location='atualizarlivro/renovar.php';</script>";
  }
  //if (isset($_POST['bt5'])) {
    //echo "<script>window.location='#';</script>";
  //}
  //if (isset($_POST['bt6'])) {
  //  echo "<script>window.location='#';</script>";
  //}
?>