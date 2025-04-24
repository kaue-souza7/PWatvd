<?php
    $banco = new PDO('sqlite:meu_banco.db');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $nascimento = $_POST['nascimento'];
    $genero = $_POST['genero'];
    $tipoInscricao = $_POST['tipoInscricao'];
    $mensagem = $_POST['mensagem'];


    $sql = "INSERT INTO inscrito (
                nome, 
                email, 
                telefone, 
                dtNascimento, 
                genero, 
                tipoInscricao, 
                mensagem
            ) 
            VALUES (
                :nome, 
                :email, 
                :telefone, 
                :nascimento, 
                :genero, 
                :tipoInscricao, 
                :mensagem
            )";

    $stmt= $banco->prepare($sql);

    $stmt->execute([
        ':nome'=>$nome,
        ':email'=>$email,
        ':telefone'=>$telefone,
        ':nascimento'=>$nascimento,
        ':genero'=>$genero,
        ':tipoInscricao'=>$tipoInscricao,
        ':mensagem'=>$mensagem,
    ]);


    echo 'Dados inseridos';
?>