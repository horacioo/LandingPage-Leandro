<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Requisição inválida";
    exit;
}

// Captura os dados
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$whatsapp = $_POST['whatsapp'] ?? '';
$empresa = $_POST['empresa'] ?? '';
$cargo = $_POST['cargo'] ?? '';
$faturamento = $_POST['faturamento'] ?? '';
$setor = $_POST['setor'] ?? '';
$dor = $_POST['dor'] ?? '';

// Validação básica
if (empty($nome) || empty($email) || empty($whatsapp)) {
    echo "dados inválidos";
    exit;
}

// Email destino
$para = "horacio@planet1.com.br";
$assunto = "Novo lead - NextGen";

// Monta mensagem
$mensagem = "
Nome: $nome
Email: $email
WhatsApp: $whatsapp
Empresa: $empresa
Cargo: $cargo
Faturamento: $faturamento
Setor: $setor
Dor: $dor
";

// Headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Envia
if (mail($para, $assunto, $mensagem, $headers)) {
    echo "ok";
} else {
    echo "erro ao enviar";
}