<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda ETEC</title>
</head>
<body>

<h1>Agenda de Eventos da ETEC</h1>

<a href="api.php" target="_blank">Ver eventos</a>
<hr>
<h2>Cadastrar Evento</h2>
<form action="api.php" method="POST">
    <label>Título:</label><br>
    <input type="text" name="titulo" required><br><br>
    <label>Data:</label><br>
    <input type="date" name="data" required><br><br>
    <label>Local:</label><br>
    <input type="text" name="local" required><br><br>
    <button type="submit">Cadastrar</button>
</form>

</body>
</html>