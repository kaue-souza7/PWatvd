<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <h1>Formulário de Inscrição</h1>
        <p>Atividade Chico - Ana e Kauê</p>
    </header>

    <main>
        <section>
            <form action="server_insert.php" method="post">
                
                <!-- Nome Completo -->
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
                <br>
                <br>

                <!-- E-mail -->
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                <br>
                <br>

                <!-- Telefone -->
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" placeholder="Digite seu Telefone" required>
                <br>
                <br>

                <!-- Data de Nascimento -->
                <label for="nascimento">Data de Nascimento:</label>
                <input type="date" id="nascimento" name="nascimento" required>
                <br>
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
                <br>

                <!-- Tipo de Inscrição -->
                <label for="tipoInscricao">Tipo de Inscrição:</label>
                <select id="tipoInscricao" name="tipoInscricao" required>
                    <option value="">Selecione...</option>
                    <option value="palestrante">Palestrante</option>
                    <option value="participante">Participante</option>
                    <option value="voluntario">Voluntário</option>
                </select>
                <br>
                <br>

                <!-- Mensagem -->
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="5" maxlength="200" placeholder="Digite sua mensagem aqui..." required></textarea>
                <br>
                <br>

                <!-- Botões -->
                <div>
                    <button type="submit">Enviar</button>
                    <button type="reset">Limpar</button>
                </div>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 - Formulário de Inscrição</p>
    </footer>

</body>
</html>