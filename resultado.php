<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Resultado da reserva</title>
</head>
<body>

<?php

$nome=$_GET["nome"];
$sexo=$_GET["sexo"];
$email=$_GET["email"];
$data_chegada=$_GET["data_chegada"];
$numero_noites=$_GET["numero_noites"];
$numero_hospedes=$_GET["numero_hospedes"];
$mensagem=$_GET["mensagem"];
$news=$_GET["news"];
$onde=$_GET["onde"];

$dataPT = new DateTime($data_chegada);

$novadata = $dataPT->format("d/m/Y");

//echo ."<p><strong>.$nome.</strong>". "seu cadastro foi realizado com sucesso"</p>;
//echo "<p>Sua data de chegada é: <strong>$novadata</strong> e você ficará <strong>$numero_noites</strong> noites";
?>

</body>
</html>