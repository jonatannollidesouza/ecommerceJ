<?php
$sql_produtos = "SELECT * FROM `produtos`";
    $produtoss_prepara = $conn->prepare($sql_produtos);
    $produtos_prepara->execute();


echo "<td>".$filme['id']."</td>";
echo "<td>".$filme['descricao']."</td>";
echo "<td>".$filme['caracteristicas_id']."</td>";
echo "<td>".$filme['valor']."</td>";
echo "<td>".$filme['estoque']."</td>";
echo "<td>".$filme['imagem']."</td>";
echo "<td>".$filme['resumo']."</td>";

                    