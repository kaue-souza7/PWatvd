<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

    <main>
        <header class="title">
            <h1>Formulário de Inscrição</h1>
            <p>Atividade Chico - Ana e Kauê</p><br>
        </header>
        <section>
        
            <form action="server_insert.php" method="post">
                
                <!-- Nome Completo -->
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
                <br>

                <!-- E-mail -->
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                <br>

                <!-- Telefone -->
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" placeholder="Digite seu Telefone" required>
                <br>

                <!-- Data de Nascimento -->
                <label for="nascimento">Data de Nascimento:</label>
                <input type="date" id="nascimento" name="nascimento" required>
                <br>

                <!-- Gênero -->
                <label for="genero">Gênero:</label>
                <select name="genero" id="genero">
                    <option value="">Selecione...</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="Outro">Outro</option>

                </select>
                <br>

                <div>
                    <!-- Tipo de Inscrição -->
                    <label for="tipoInscricao">Tipo de Inscrição:</label>
                    <select id="tipoInscricao" name="tipoInscricao" required>
                        <option id="placeholder-select"value="">Selecione...</option>
                        <option value="palestrante">Palestrante</option>
                        <option value="participante">Participante</option>
                        <option value="voluntario">Voluntário</option>
                    </select>
                    <br>

                </div>
                

                <div class="mensagem">
                    <!-- Mensagem -->
                    <label id="text-mensagem "for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="mensagem" rows="3" maxlength="200" placeholder="Digite sua mensagem aqui..." required></textarea>
                     <br>
                </div>

                <!-- Botões -->
                <div class="botao">
                    <button type="reset">Limpar</button>
                    <button type="submit">Enviar</button>
                </div>
            </form>
            <footer>
                <p>&copy; 2025 - Formulário de Inscrição</p>
            </footer>
        </section>
    </main>

    

</body>
</html>