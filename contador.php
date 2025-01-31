<?php
// Nome do arquivo JSON que armazenará os contadores
$arquivo = 'contador.json';

// Obtém o parâmetro 'target' da URL
$target = isset($_GET['target']) ? $_GET['target'] : 'default';
$urlDestino = isset($_GET['urlDestino']) ? $_GET['urlDestino'] : 'https://ornaghiconsultoria.com.br';

// Verifica se o arquivo existe, se não, cria um JSON inicial
if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([]));
}

// Lê os dados do arquivo JSON
$dados = json_decode(file_get_contents($arquivo), true);

// Se o target não existir, inicializa com 0
if (!isset($dados[$target])) {
    $dados[$target] = 0;
}

// Incrementa o contador do target específico
$dados[$target]++;

// Salva os dados atualizados no JSON
file_put_contents($arquivo, json_encode($dados, JSON_PRETTY_PRINT));

// Opcional: Redirecionar para outra página após registrar o acesso
header("Location: " . $urlDestino); // Descomente e altere se necessário
exit();
?>