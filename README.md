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

- GET ->  /api/v1/clientes
- GET -> /api/v1/clientes/{status}
  <TABLE>
      <THEAD>
          <TH COLSPAN=2 style="text-align:center">STATUS</TH>
      </THEAD>
      <TR>
          <TD>
              ATIVO
          </TD>
          <TD>
              DESATIVADO
          </TD>
      </TR>
  </TABLE>
- GET -> /api/v1/cliente/{id}
    
- POST -> /api/v1/clientes
  <TABLE>
      <THEAD>
          <TH>NOME</TH>
          <TH>SEXO</TH>
      </THEAD>
      <TBODY>
          <TR>
              <TD>STRING</TD>
              <TD>STRING</TD>
          </TR>
      </TBODY>
  </TABLE>  
  
- PUT ->  /api/v1/cliente/{id}
- Delete -> /api/v1/cliente/{id}

## Subindo servidor

- Para executar a api rode o comando <code>php -S localhost:8000 -t ./public</code> no seu terminal.
