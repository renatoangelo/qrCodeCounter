<?php
// Inclui a biblioteca phpqrcode
require 'phpqrcode/qrlib.php';

// Diretório onde os QR Codes serão salvos
$diretorio = 'qrcodes/';
if (!file_exists($diretorio)) {
    mkdir($diretorio, 0777, true);
}

// Obtém os parâmetros da URL
$target = isset($_GET['target']) ? $_GET['target'] : 'default';
$urlDestino = isset($_GET['urlDestino']) ? $_GET['urlDestino'] : 'https://ornaghiconsultoria.com.br';

// Codifica a URL de destino para evitar problemas com caracteres especiais
$urlDestino = urlencode($urlDestino);

// Define a URL do contador com redirecionamento
$url = "https://ornaghiconsultoria.com.br/qrcode/contador.php?target=" . urlencode($target) . "&urlDestino=" . $urlDestino;

// Nome do arquivo PNG que será gerado
$arquivo_png = $diretorio . $target . ".png";

// Gerar QR Code (conteúdo, nome do arquivo, nível de erro, tamanho, margem)
QRcode::png($url, $arquivo_png, QR_ECLEVEL_L, 10, 2);

// Exibir o QR Code gerado na tela
//header('Content-Type: image/png');
//readfile($arquivo_png);
//echo $target;
header("Location: http://ornaghiconsultoria.com.br/qrcode/qrcodes/" . $target . ".png");
?>

