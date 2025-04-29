<?php
    $banco = new PDO('sqlite:meu_banco.db');
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $nascimento = $_POST['nascimento'];
    $genero = $_POST['genero'];
    $tipoInscricao = $_POST['tipoInscricao'];
    $mensagem = $_POST['mensagem'];




// Verificar se a data de nascimento foi informada
if (empty($nascimento)) {
    echo "Data de Nascimento obrigatória";
} else {
    // Tentar criar um objeto DateTime a partir da data fornecida
    $data_nascimento_obj = DateTime::createFromFormat('Y-m-d', $nascimento);

    // Verificar se a data é válida
    if ($data_nascimento_obj === false) {
        echo "Data de nascimento inválida.";
    } else {
        // Se a data é válida, verificar a idade
        // echo "Data de nascimento válida!<br>";

        // Calcular a idade
        $data_atual = new DateTime();
        $intervalo = $data_atual->diff($data_nascimento_obj);
        $idade = $intervalo->y;

        // Verificar se a pessoa tem 18 anos ou mais
        if (($idade >= 18) && (preg_match('/^\d{11}$/', $telefone))){
            echo "Você tem $idade anos, e é maior de idade.<br>";
            echo 'Numero valido!<br>';
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


            echo 'Dados inseridos!';
        } else {
            echo "Telefone ou Data de Nascimento incorreto!";
            
        }
    }
}




// $sql = "INSERT INTO inscrito (
//                 nome, 
//                 email, 
//                 telefone, 
//                 dtNascimento, 
//                 genero, 
//                 tipoInscricao, 
//                 mensagem
//             ) 
//             VALUES (
//                 :nome, 
//                 :email, 
//                 :telefone, 
//                 :nascimento, 
//                 :genero, 
//                 :tipoInscricao, 
//                 :mensagem
//             )";

//     $stmt= $banco->prepare($sql);

//     $stmt->execute([
//         ':nome'=>$nome,
//         ':email'=>$email,
//         ':telefone'=>$telefone,
//         ':nascimento'=>$nascimento,
//         ':genero'=>$genero,
//         ':tipoInscricao'=>$tipoInscricao,
//         ':mensagem'=>$mensagem,
//     ]);


//     echo 'Dados inseridos';
// 
// 
?>