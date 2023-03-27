<?php

    $cod_produto = $_POST["cod_produto"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];
    $medida = $_POST["medida"];
    $controle = $_POST["controle"];
    $diversos = $_POST["diversos"];
    $fotos = $_FILES["fotos"];

    if(isset($_FILES["fotos"])){
        move_uploaded_file($_FILES["fotos"]["tmp_name"], "img/". $_FILES["fotos"]["name"]);
        $caminho_foto  = "img/". $_FILES["fotos"]["name"];
    }
    else{
        echo "Não foi possivel fazer o upload!!!";
    }
    
    $texto_cadastro = $cod_produto. " , " .$descricao. " , " .$preco. " , " .$quantidade. " , " .$medida. " , " .$controle. " , " .$diversos. " , ". $caminho_foto."\n";
    
    $grava_banco = fopen("banco.csv", "a");
    fwrite($grava_banco , $texto_cadastro);
    fclose($grava_banco);

?>

