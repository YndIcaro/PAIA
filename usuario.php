<?php

    include("conexao.php");

    if (isset($_POST['form'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $sql = "INSERT INTO usuario (nome,sobrenome) VALUES ('$nome','$sobrenome');";

        if ($conn->query($sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->errorInfo();
        }

    }
?>

<form method="POST">
    <input type="hidden" name="form" />
    <h1> OOOOWWWWWWWWWW MAAAH GOO </h1>
    <label for="a">Nome</label>
    <input type="text" name="nome" id="nome" />
    <label for="sobreonome">Sobrenome</label>
    <input type="text" name="sobrenome" id="sobrenome" />
    <input type="submit" value="Salvar" />
</form>