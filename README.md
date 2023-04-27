# API REST para Gerenciamento de Clientes e Notas Fiscais

Este projeto é uma API REST desenvolvida com o framework Laravel e tem como objetivo gerenciar clientes e notas fiscais.

----

### Funcionalidades
- Cadastrar clientes
- Consultar clientes
- Atualizar clientes
- Cadastrar notas fiscais para um cliente
- Consultar notas fiscais de um cliente
- Atualizar notas fiscais
- As rotas estão protegidas pelo middleware auth:sanctum, que exige autenticação para acessar as informações. Isso é importante para garantir a segurança dos dados dos clientes e das notas fiscais.

---

### Configuração
Para utilizar a API, siga os passos abaixo:

- Faça o clone do repositório para a sua máquina local.
- Abra o terminal na pasta raiz do projeto e execute o comando `composer install` para instalar as dependências do Laravel.
- Crie um arquivo .env na raiz do projeto, com base no arquivo .env.example que já está presente. Este arquivo irá conter as configurações do banco de dados, URL e outras informações necessárias para o funcionamento da aplicação.
- Execute o comando `php artisan key:generate` para gerar a chave de criptografia da aplicação.
- Execute o comando `php artisan migrate` para criar as tabelas do banco de dados.
- Execute o comando `php artisan db:seed` para popular o banco de dados com informações de exemplo (opcional).

---

### Rotas
A API utiliza as seguintes rotas:

- /api/v1/customers <br>
GET: Retorna uma lista de todos os clientes cadastrados no sistema. <br>
POST: Cria um novo cliente no sistema.


- /api/v1/customers/{id} <br>
GET: Retorna informações sobre um cliente específico. <br>
PUT: Atualiza as informações de um cliente existente. <br>


- /api/v1/invoices <br>
GET: Retorna uma lista de todas as notas fiscais cadastradas no sistema. <br>
POST: Cria uma nova nota fiscal no sistema. <br>


- /api/v1/invoices/{id} <br>
GET: Retorna informações sobre uma nota fiscal específica. <br>
PUT: Atualiza as informações de uma nota fiscal existente. <br>


- /api/v1/invoices/bulk <br>
POST: Cria múltiplas notas fiscais de uma vez, utilizando os dados enviados no corpo da requisição.


- /setup <br> 
GET: Cria os tokens de acesso

  
