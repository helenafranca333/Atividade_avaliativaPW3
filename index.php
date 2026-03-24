<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda ETEC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
<h1>Agenda de Eventos da ETEC</h1>
<label>Maria Helena Muniz França</label>
<br>
<br>
<a href="api.php" target="_blank">Ver eventos</a>
<br>
<br>
<div class="conteiner">
<h2>Cadastrar Evento</h2>
<form action="apiPost.php" method="POST">
    <label>Título:</label><br>
    <input type="text" name="titulo" required><br><br>
    <label>Data:</label><br>
    <input type="date" name="data" required><br><br>
    <label>Local:</label><br>
    <input type="text" name="local" required><br><br>
    <button type="submit">Cadastrar</button>
</form>
</div>
</div>
</body>
</html>