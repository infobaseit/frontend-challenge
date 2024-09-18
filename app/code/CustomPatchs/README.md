# Infohq_Comics

## Descrição
O módulo `SetupContents` é um módulo para Magento 2 responsável por agregar os datapatchs que são criados para configurações, criação de páginas e blocos cms.


## Como Usar
- Adicione o arquivo de datapatch dentro de Setup/Patch/Data
- Rode o bin/magento setup:upgrade para rodar o datapatch 

## Requisitos
- Magento 2 (utilizado para desenvolvimento magento 2.4.7-p2)

## Instalação
1. Copie a pasta `CustomPatchs/SetupContents` para o diretório `app/code/` de sua instalação Magento.
2. Execute os seguintes comandos na linha de comando do Magento:
   ```bash
   php bin/magento setup:upgrade
   php bin/magento cache:clean
