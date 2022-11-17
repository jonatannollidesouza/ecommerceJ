<?php
    include "lib/conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ecommerce</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
* {
  box-sizing: border-box;
}


body {
  
  margin: 0;
}


.header {
  padding: 60px;
  
  background-color: #ffc006;
  
}

.navbar {
  overflow: hidden;
  background-color: #000000;
}


.navbar a {
  float: left;
  display: block;
  color: #ffc006;
  text-align: center;
  padding: 14px 20px;
  
}


.navbar a.right {
  float: right;
}

.produto{
  padding: 90px;
}




.footer {
  padding: 50px;
  text-align: center;
  background: black;
  color:white;
}


.button{
  color: black;
}
</style>
</head>
<body>

<div class="header">
 
</div>

<div class="navbar">
  
<br>

  <a class="btn btn-outline-warning" href="index.php" role="button"> Página Inicial</a>
  <a class="btn btn-outline-warning" href="catálogo.php" role="button">Catálogo</a>
  <a class="btn btn-outline-warning" href="cadastro.php" role="button">Anunciar Produto</a>
  <a class="btn btn-outline-warning" href="contato.php" role="button"> Contato</a>

  
  
  <br>
 <br>
  <input type="search" id="site-search" placeholder="Pesquisar Produtos" name="q">
  <button class="btn btn-outline-warning" type="submit">P</button>
  
</div>


        <?php
      
          $sql_produtos = "SELECT * FROM `produtos`";
          $produtos_prepara = $conn->prepare($sql_produtos);
          $produtos_prepara->execute();
        


                    while($produtos = $produtos_prepara->fetch()) {
                      echo "<br>";
                      echo "<br>";
                        echo "<div class='w3-row-padding'>";
                            echo "<div class='w3-third'>";
                            echo "<div class='w3-card'>";
                              echo"<img class='mx-auto' src='imagens/" .$produtos['imagem']."' alt='image' height='600' width='400'>";
                              echo "<div class='w3-container'>";
                                echo"<h2>" .$produtos['descricao']."</h2>";
                                echo"<h3>" .$produtos['valor']."</h3>";
                                echo"<p>" .$produtos['caracteristicas']."</p>";

                        echo"</div>";
                            echo"</div>";
                            echo"</div>";
                              echo"</div>";
                         
                            


                            echo "<br>";
                            echo "<br>";
                         
                         
                      
                                           
                  
                      }
                     
                ?>
      
  
</div>
<br>
<br>
<br>
<div class="footer">
 
 
</div>

</body>
</html>
