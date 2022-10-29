<?php
session_start();
if(!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de títulos</title>
    <style>
         body{font: 16px sans-serif;}
         .campo{font-size: 14px; font-weight: bold;}
         .resposta{height: 24px; width: 240px;}
         .cta{font-size: 16px;}
    </style>
</head>
<body>
    <div class="">
        <h3>Gestão de conteúdo Netflix</h3>
        <h1>Cadastro de títulos</h1>
        <p>Insira os dados nos campos abaixo. Cadastre um título de cada vez. </p><br>
        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="get">
        <div>
            <label class="campo">Título:</label><br>
            <input class="resposta" type="text" name="titulo" value="">
        </div><br>
        <div>
            <label class="campo">Gênero:</label><br>
            <input class="resposta" type="text" name="genero" value="">
        </div><br>
        <div>
            <label class="campo">Ano:</label><br>
            <input class="resposta" type="text" name="ano" value="">
        </div><br>
        <div>
            <label class="campo">Classificação indicativa:</label><br>
            <input class="resposta" type="text" name="classificacao" value="">
        </div><br>
        <div class="cta">
                <input type="submit" value="Cadastrar">
        </div><br><br><br>
        <div class="cta">
                <a href="logout.php" button>Sair</button>
        </div>       
</body>
</html>

<?php

 $titulo = $_GET['titulo'];
 $genero = $GET['genero'];
 $ano = $GET['ano'];
 $classificacao = $GET['classificacao'];

require_once('dados_banco.php');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO titulos (titulo, genero, ano, classificacao)
    VALUES ('$titulo', '$genero', '$ano', '$classificacao')";
    // use exec() because no results are returned
    $conn->exec($sql);
    /*echo "New record created successfully";*/
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

<?php
if (isset($_GET['titulo'])
    and isset ($_GET['genero'])
    and isset($_GET['ano'])
    and isset($_GET['classificacao'])) {
    $_GET['titulo'];
    $_GET['genero'];
    $_GET['ano'];
    $_GET['classificacao'];
    
   $filename = "tituloscadastrados.txt";
   if(!file_exists("tituloscadastrados.txt")){
       $handle = fopen("tituloscadastrados.txt", "w");
   } else {
       $handle = fopen("tituloscadastrados.txt", "a");
   }
   fwrite($handle, $_GET['titulo']."|".$_GET['ano']."|".$_GET['ano']."|".$_GET['classificacao']."\n");
   fflush($handle);
   fclose($handle);
}
?>
