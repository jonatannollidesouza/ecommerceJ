<?php
    include "lib/conexao.php";

?>
<?

    if(isset($_POST['nome'])){
        $sql = $pdo->prepare("INSERT INTO `produtos` VALUES(null,?,?,?,?,?,?,?)");
        $sql ->execute(array($_POST['id'],$_POST['descricao'],$_POST['caracteristicas'],$_POST['valor'],$_POST['imagem'],$_POST['resumo']));
        echo 'Produto cadastrado!';
    }
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
.form{
    color:black;
    border: radius 90px;
    
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
        


                    
                     
                ?>
      
  
</div>

<form method="post">
        <input type="text" name="id" placeholder="Número de identificação">
        <input type="text" name="descricao" placeholder="Descrição do Produto">
        <input type="text" name="caracteristicas" placeholder="Características">
        <input type="text" name="valor" placeholder="Preço">
        <input type="text" name="imagem" placeholder="Imagem">
        <input type="text" name="resumo" placeholder="Resumo do Produto">
        <input type="submit" value="Enviar">
        
    </form>
<br>
<br>
<br>
<div class="footer">
 
 
</div>

</body>
</html>

    <?php
