<?php 
  session_start();

  if(isset($_POST['submit'])){
    include("conexão.php");
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $bd = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $resultados = $coon -> query($bd);

    if($resultados -> num_rows == 1){
      $_SESSION['email'] = $email;
        
      header("location:/CEEPSNACKS/principal/index.html");
      session_destroy();
    }
}
