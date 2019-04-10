<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Campos de Input</title>
</head>
<body>
    <h1>Exemplo de Formulário</h1>
    <hr>
    <form>
        <p>
            Data: <input type="date" name="data">
        </p>
        <p>
            Cor: <input type="color" name="cor">
        </p>
        <p>
            Mês: <input type="month" name="mes">
        </p>
        <p>
            Data e Hora Local: <input type="DateTime-Local" name="datatimelocal">
        </p>
        <p>
            email: <input type="Email" name="email" placeholder="email@dominio.com.br">
        </p>
        <p>
        Número: <input type="number" name="numero">
        </p>
        <p>
        Range: <input type="range" name="intervalo">
        </p>
        <p>
        Pesquisa: <input type="search" name="pesquisa" placeholder="Pesquisa aqui..."> 
        </p>
        <p>
        URL: <input type="url" name="link" placeholder="http://www.dominio.com.br">
        </p>
        <p>
        <button type="post" name="meubotao">Click me</button>
        </p>
</form>
</body>
</html>