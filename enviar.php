<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $numero = $_POST['Numero'];
    $servico = $_POST['servico'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    
    // Substitua com seu token de bot do Telegram
    $token = "SEU_TOKEN_DE_BOT";
    $chat_id = "SEU_CHAT_ID";  // Pode ser seu ID de chat ou um grupo que você administre

    // Montando a mensagem
    $message = "Novo Agendamento:\n";
    $message .= "Nome: $nome\n";
    $message .= "Número: $numero\n";
    $message .= "Serviço: $servico\n";
    $message .= "Data: $data\n";
    $message .= "Hora: $hora\n";

    // Enviando para o Telegram
    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);
    file_get_contents($url);  // Envia a mensagem
}
?>
