<?php
         $nomebanda =  $_POST['nomebanda'];
         $nmintegrante0 = $_POST['nmintegrante0'];
         $datanascimento0 = $_POST['datanascimento0'];
         $instrumento0 = $_POST['instrumento0'];
         $nmintegrante1 = $_POST['nmintegrante1'];
         $datanascimento1 = $_POST['datanascimento1'];
         $instrumento1 = $_POST['instrumento1'];
         $nmintegrante2 = $_POST['nmintegrante2'];
         $datanascimento2 = $_POST['datanascimento2'];
         $instrumento2 = $_POST['instrumento2'];
         $imagembanda = $_POST['imagembanda'];
         $cordefundo = $_POST['cordefundo'];
         $cordotexto = $_POST['cordotexto'];
         $biografia = $_POST['biografia'];
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/Estilo.css">
    <title>Formulario - Banda</title>
</head>
    <body class="<?php echo $cordefundo?> <?php echo $cordotexto  ?>">
        <h2 class="titulos"><?php echo $nomebanda ?></h2>
       <!--  <h2 class="titulos"><?php echo $totallinhas ?></h2> -->
        <img src=<?php echo $imagembanda ?> alt="<?php echo $nomebanda ?>" title="<?php echo $nomebanda ?>">
        <hr>
        <h2 class="titulos">Biografia</h2>
        <div class="biografiaphp" >
            <?php echo $biografia?>
        </div>
        <hr>
        <h2 class="titulos">Integrantes</h2>
        <div>
            <table border="2px solid" >
                <th>Integrante(Nome)</th>
                <th>Data de Nascimento</th>
                <th>Instrumento</th>
                <tr>
                    <td><?php echo $nmintegrante0 ?></td>
                    <td><?php echo $datanascimento0 ?></td>
                    <td><?php echo $instrumento0 ?></td>
                </tr>
                <tr>
                    <td><?php echo $nmintegrante1 ?></td>
                    <td><?php echo $datanascimento1 ?></td>
                    <td><?php echo $instrumento1 ?></td>
                </tr>
                <tr>
                    <td><?php echo $nmintegrante2 ?></td>
                    <td><?php echo $datanascimento2 ?></td>
                    <td><?php echo $instrumento2 ?></td>
                </tr>
            </table>
        </div><br>
        <!--<hr>
            <center><h2>Clique para assistir o vídeo</h2></center>
            <center>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/gLYqPrnOIag" frameborder="0" allowfullscreen></iframe>
            </center>-->
    </body>
</html>