# Carteira de cliente

## Pre-requisitos

- PHP >= 8.0
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Composer

## Recursos

- Cadastro de cliente
- Buscar todos os cliente ativos
- Buscar clientes específicos
- Deletar clientes específicos

## Rotas disponíveis

- GET    /api/v1/clientes
- GET    /api/v1/clientes/{id}
- POST   /api/v1/clientes
- PUT    /api/v1/clientes/{id}
- Delete /api/v1/clientes/{id}

## Subindo servidor

- Para executar a api rode o comando <code>php -S localhost:8000 -t ./public</code> no seu terminal.
