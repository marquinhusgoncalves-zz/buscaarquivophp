<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Download</title>
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>

<body>
  <form class="pure-form" method="post" action="http://www.mundosa.com.br/sites/buscaarquivo/download.php" >
    <fieldset>
        <legend>Download</legend>
        <label for="dia">Dia</label>
        <input type="text" name="dia" id="dia" size="3" maxlength="2" tabindex="1">
        <label for="mes">Mês</label>
        <input type="text" name="mes" id="mes" size="3" maxlength="2" tabindex="2">
        <label for="ano">Ano</label>
        <input type="text" name="ano" id="ano" size="5" maxlength="4" tabindex="3">
        <label for="code">Code</label>
        <input type="text" name="code" id="code" size="15" tabindex="4">
        <button type="reset" class="pure-button pure-button-primary">Limpar</button>
        <button type="submit" class="pure-button pure-button-primary">Download</button>
    </fieldset>
</form>
</body>
</html>