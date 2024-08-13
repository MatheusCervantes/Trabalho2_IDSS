# Trabalho2_IDSS

Este repositório contém um sistema desenvolvido para gerenciar dados específicos, utilizando uma configuração baseada em Docker para facilitar a implantação e o gerenciamento de dependências. Siga as instruções abaixo para configurar e executar o sistema em seu ambiente local.

## Pré-requisitos

- [Docker](https://docs.docker.com/get-docker/) instalado
- [Docker Compose](https://docs.docker.com/compose/install/) instalado

## Clonando o Repositório

Para clonar o repositório, abra o terminal e execute o seguinte comando:

```bash
git clone https://github.com/MatheusCervantes/Trabalho2_IDSS.git
```

## Configurando o Projeto

1. Navegue até o diretório do projeto clonado:

   ```bash
   cd Trabalho2_IDSS
   ```

2. Inicie os serviços do Docker com o Docker Compose:

   ```bash
   docker-compose up -d
   ```

## Acessando o Sistema

Após os serviços estarem ativos, você pode acessar o sistema via navegador. Abra o seu domínio configurado para visualizar a aplicação.

- **Sistema Principal:** `http://<seu_dominio>`

### Nota Importante

Caso ocorra algum erro ao tentar abrir o sistema pela primeira vez, siga os seguintes passos:

1. Abra o gerenciador de banco de dados (phpMyAdmin) no seguinte endereço:

   - **phpMyAdmin:** `http://<seu_dominio>:81`

2. Após acessar o gerenciador de banco de dados, volte para o sistema principal e tente novamente.

Essa ação geralmente resolve problemas de inicialização e sincronização entre o sistema e o banco de dados.

## Gerenciador de Banco de Dados

O gerenciador de banco de dados pode ser acessado utilizando a porta 81. Utilize o seguinte endereço:

- **phpMyAdmin:** `http://<seu_dominio>:81`

Certifique-se de substituir `<seu_dominio>` pelo domínio configurado em seu ambiente local.

## Parando os Serviços

Para parar os serviços, você pode utilizar o seguinte comando:

```bash
docker-compose down
```
