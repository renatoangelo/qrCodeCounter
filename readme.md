#📌 QR Code Redirector - PHP#

Este projeto é um sistema simples de geração de QR Codes e redirecionamento de URLs com contagem de acessos, desenvolvido em PHP puro, sem necessidade de banco de dados.

🔥 Funcionalidades
✅ Geração de QR Codes dinâmicos com base em um target
✅ Redirecionamento automático para a URL correspondente
✅ Contabilização de acessos para cada QR Code
✅ Armazenamento de dados em um único arquivo JSON

🚀 Como Funciona?
1️⃣ Gerar QR Code: O script gerar_qr.php cria um QR Code baseado no target informado na URL.
2️⃣ Escanear o QR Code: O QR Code aponta para redirecionar.php, que lê o target, contabiliza o acesso e redireciona para a URL configurada.
3️⃣ Configuração de URLs: O arquivo dados.json armazena os targets e suas URLs de destino, permitindo atualização sem precisar reimprimir os QR Codes.

🔧 Como Usar?
1️⃣ Clone o repositório

git clone https://github.com/seu-usuario/qr-code-redirector.git

2️⃣ Baixe a biblioteca phpqrcode e coloque a pasta lib/ no projeto
3️⃣ Acesse gerar_qr.php?target=meuTarget para criar um QR Code
4️⃣ Escaneie o QR Code gerado para ser redirecionado à URL cadastrada

📜 Exemplo de dados.json
{
  "target1": {
    "url": "https://exemplo.com/pagina1",
    "acessos": 0
  },
  "target2": {
    "url": "https://exemplo.com/pagina2",
    "acessos": 0
  }
}


🛠 Tecnologias Usadas
PHP
JSON (para armazenamento de dados)
phpqrcode (para geração de QR Codes)