# Infohq_Comics

## Descrição
O módulo `Infohq_Comics` é um módulo para Magento 2 que integra a API da Marvel para exibir uma lista de quadrinhos e detalhes individuais de cada quadrinho. Carregando informações como o título, descrição, capa, série, data de lançamento, número da edição.

## Rota
- **Listagem de Quadrinhos**: 
  - URL: `/comics/index/index`

## Como Usar
1. Acesse a rota `/comics/index/index` em sua loja Magento para visualizar a lista de quadrinhos.
2. Clique em um quadrinho da lista para ver os detalhes completos.

## Requisitos
- Magento 2 (utilizado para desenvolvimento magento 2.4.7-p2)
- Chaves de API da Marvel configuradas no módulo (`publicKey` e `privateKey`).

## Observações
- Certifique-se de que a loja Magento tenha acesso à internet para se comunicar com a API da Marvel.
- O módulo utiliza a chave pública e privada da Marvel para autenticação das requisições.
- Limite de requisições: A API da Marvel pode ter limitações na quantidade de requisições permitidas. Se o limite for atingido, pode ocorrer um erro ao carregar os quadrinhos.

## Instalação
1. Copie a pasta `Infohq/Comics` para o diretório `app/code/` de sua instalação Magento.
2. Execute os seguintes comandos na linha de comando do Magento:
   ```bash
   php bin/magento setup:upgrade
   php bin/magento setup:di:compile
   php bin/magento setup:static-content:deploy
   php bin/magento cache:clean
