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

- GET -> /api/v1/clientes
    <TABLE>   
         <THEAD>
           <TH COLSPAN=4>PARAMETROS</TH>
         </THEAD>
          <TBODY>
            <TR>
              <TD ROWSPAN=2>JSON</TD>
              <TD> ATRIBUTO </TD>
              <TD> NOME </TD> 
              <TD> SEXO</TD>
            </TR>
            <TR> 
              <TD> TIPO </TD> 
              <TD> STRING </TD>
              <TD> STRING </TD>
            </TR>
          </TBODY>
      </TABLE>
- GET -> /api/v1/clientes/{status}
  <TABLE>
     <THEAD>
        <TH COLSPAN="2">PARAMETROS</TH>
     </THEAD> 
      <TR >
          <TD rowspan="2"> STATUS </TD> 
          <TD> ATIVO </TD> 
      </TR>
      <TR> 
          <TD> DESATIVADO</TD> 
      </TR>
  </TABLE>
  
- GET -> /api/v1/cliente/{id}
     <TABLE>   
         <THEAD>
           <TH COLSPAN=2>PARAMETROS</TH>
         </THEAD>
          <TBODY>
            <TR> <TD> ATRIBUTO </TD> <TD> ID </TD> </TR>
            <TR> <TD> TIPO </TD> <TD> INT </TD> </TR>
          </TBODY>
      </TABLE>
  
- POST -> /api/v1/clientes
   <TABLE>   
     <THEAD>
       <TH COLSPAN=3>PARAMETRO</TH>
     </THEAD>
      <TBODY>
        <TR> <TD> ATRIBUTO </TD> <TD> NOME </TD> <TD> SEXO </TD> </TR>
        <TR> <TD> TIPO </TD> <TD> STRING </TD> <TD> STRING </TD> </TR>
      </TBODY>
  </TABLE>  
  
- PUT ->  /api/v1/cliente/{id}
  <TABLE>   
     <THEAD>
       <TH COLSPAN=3>PARAMETROS</TH>
     </THEAD>
      <TBODY>
        <TR> <TD> ATRIBUTO </TD> <TD> ID </TD> </TR>
        <TR> <TD> TIPO </TD> <TD> INT </TD> </TR>
      </TBODY>
   </TABLE>
   
- Delete -> /api/v1/cliente/{id}
   <TABLE>   
     <THEAD>
       <TH COLSPAN=2>PARAMETROS</TH>
     </THEAD>
      <TBODY>
        <TR> <TD> ATRIBUTO </TD> <TD> ID </TD> </TR>
        <TR> <TD> TIPO </TD> <TD> INT </TD> </TR>
      </TBODY>
  </TABLE>  
  
## Subindo servidor

- Para executar a api rode o comando <code>php -S localhost:8000 -t ./public</code> no seu terminal.
