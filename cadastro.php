<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Cadastro de Produtos PHP</title>
</head>

<body>
    <div class="content">
        <h2>Cadastro De produtos</h2>
        <br>
        <form name="cadastro_dados" action="grava_cadastro.php" method="POST" enctype="multipart/form-data">
            <div class="div_form">
                Código de Produto: <input type="text" name="cod_produto"><br>
                <br>
                Descrição Produto: <input type="text" name="descricao"><br>
                <br>
                Preço: <input type="text" name="preco"><br>
                <br>
                Quantidade: <input type="text" name="quantidade"><br>
                <br>
                Unidade Média: <select name="medida">
                    <option>Centímetros</option>
                    <option>Grama</option>
                    <option>Quilograma</option>
                </select><br><br>
                Controle: <input type="radio" name="controle" value="lote" id="lote1">
                <label for="lote">Lote</label>
                <input type="radio" name="controle" value="Apartamento" id="serie1">
                <label for="serie">Série</label>
                <br>
                Diversos: <input type="checkbox" name="diversos" value="numero_serie">
                <label for="Estacionamento">Número de Série</label>
                <input type="checkbox" name="diversos" value="inativo">
                <label for="inativo">Inativo</label><br>
                <label for="fotos" class="ft">Enviar Foto</label>
                <input type="file" name="fotos" accept="image/png , image/jpeg" id="fotos"><br>
                <button value="cadastro" type="submit" id="botao_cadastro">Cadastrar</button>
            </div>
        </form>
    </div>
</body>

</html>