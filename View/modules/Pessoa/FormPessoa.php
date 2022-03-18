<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/pessoa/save" method="post">
        <fieldset>
            <legend>Cadastro de Pessoa</legend>
            <label for="nome">Nome:</label>
            <input name="nome" id="nome" type="text" />

            <label for="rg">RG:</label>
            <input name="rg" id="rg" type="text" />

            <label for="cpf">CPF:</label>
            <input name="cpf" id="cpf" type="number" />

            <label for="data_nascimento">Data Nascimento:</label>
            <input name="data_nascimento" id="data_nascimento" type="date" />

            <label for="email">E-mail:</label>
            <input name="email" id="email" type="email" />

            <label for="telefone">Telefone:</label>
            <input name="telefone" id="telefone" type="numer" />

            <label for="endereco">Endereço:</label>
            <input name="endereco" id="endereco" type="text" />
            <label for="endereco">Numero:</label>
            <input name="numero" id="numero" type="numer" />
            
            <button type="submit">Enviar</button>

            </fieldset>
            
        </form>    
 
        </body>
      
        </html>