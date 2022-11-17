<?php
    include "lib/conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/font-awesome.min.css">
<title>ecomerce</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

.menu{
  padding: 90px;
  background-color:white;
}




.footer {
  padding: 50px;
  text-align: center;
  background: white;
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
  <div class="menu">
    
        <?php
      
        $sql_categorias = "SELECT * FROM `categorias`";
        $categorias_prepara = $conn->prepare($sql_categorias);
        $categorias_prepara->execute();
        


                    while($descricao = $categorias_prepara->fetch()) {
                        echo "<br>";
                        echo "<button type='button' class='btn btn-warning'>".$descricao['descricao']."</button>";
                        echo "<br>";
                        
                        
                                            
                    }
                ?>
        
      </div>
  
</div>
<br>
<br>
<br>
<div class="footer">
  
 
</div>

</body>
</html>
