<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Download</title>
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>
<?php

$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$code = $_POST['code'];

$pdf = 'pdf/' . $dia . '-' . $mes . '-' . $ano . '-' . $code . '.pdf';

if (file_exists($pdf)) {
    //echo "<a class='pure-button pure-button-primary' href='$pdf' target='_blank'>Abrir</a>";
	header('location:http://www.mundosa.com.br/sites/buscaarquivo/pdf/' . $dia . '-' . $mes . '-' . $ano . '-' . $code . '.pdf');
	exit;
} else {
    // echo "O arquivo $pdf não existe";
	echo '
		<script type="text/javascript">window.alert("DESCULPE, NEM UM ARQUIVO ENCONTRADO!")</script>
		<script type="text/javascript">window.location = "http://www.mundosa.com.br/sites/buscaarquivo/"</script>
		';
	exit;
}
?>
</body>
</html>