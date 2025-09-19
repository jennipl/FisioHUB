<?php
$host = 'db';
$dbname = 'mydatabase';
$username = 'root';
$password = 'mypassword';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Test query
    $stmt = $pdo->query("SELECT VERSION() as version");
    $version = $stmt->fetch(PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FisioHub</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="teste.png">

</head>
<body>

    <header class="main-header">
        <nav class="main-nav">
            <img src="teste.png" alt="logo" class= "logo-fisio"><ul>
                <li><a href="#protocolo">Protocolo</a></li>
                <li><a href="#beneficios">Benefícios</a></li>
                <li><a href="#atendimento">Atendimento</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
            <!-- <a href="#agendamento" class="btn-agendar">AGENDAR AGORA</a> -->
        </nav>
    </header>

    <main>
        <section id="hero" class="hero-section">
            <div class="hero-content">
                <h1>Título de impacto para a clínica</h1>
                <p>Texto que explica a proposta de valor, o que a clínica oferece e qual problema resolve.</p>
                <a href="#agendamento" class="btn-agendar-hero">AGENDAR CONSULTA</a>
            </div>
        </section>

        <section id="protocolo" class="protocolo-section">
            <h2>O Protocolo que Funciona</h2>
            <p>Descreva o método de atendimento da clínica, passo a passo.</p>
            </section>

        <section id="beneficios" class="beneficios-section">
            <h2>Benefícios do Nosso Atendimento</h2>
            <div class="beneficios-grid">
                <div class="beneficio-item">
                    <h3>Benefício 1</h3>
                    <p>Descrição do benefício, como "Alívio da dor muscular".</p>
                </div>
                <div class="beneficio-item">
                    <h3>Benefício 2</h3>
                    <p>Descrição do benefício, como "Melhora na flexibilidade".</p>
                </div>
            </div>
        </section>

        <!-- <section id="agendamento" class="agendamento-section">
            <h2>Agende Sua Consulta</h2>
            <p>Preencha o formulário e vamos entrar em contato.</p> -->
            <!-- <form action="processar_cadastro.php" method="post" class="agendamento-form">
                <input type="text" name="nome" placeholder="Seu nome" required>
                <input type="tel" name="telefone" placeholder="Seu telefone" required>
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento">
                <label for="patologia">Patologia:</label>
                <textarea id="patologia" name="patologia" rows="4" cols="50"></textarea> -->
                <!-- <button type="submit" class="btn-enviar">Agende Sua Consulta</button> -->
                <!-- </form> -->
        </section>

        <section id="contato" class="contato-section">
            <h2>Contato</h2>
            <p>Endereço, telefone, e-mail e redes sociais.</p>
            </section>
    </main>

    <script src="script.js"></script>
</body>
</html>