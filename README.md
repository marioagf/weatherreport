#Weather Report

1. Especificação
Sistema de previsão do tempo desenvolvido em PHP e Javascript (majoritariamente em jQuery), em banco de dados MySQL.

2. Requisitos funcionais
- Implementar tela para cadastrar as cidades e listá-las;
- As cidades só podem ser cadastradas caso sejam encontradas na API Open Weather Map (http://openweathermap.org/api);
- Para cada cidade cadastrada, deve existir um link para visualizar os detalhes da previsão cidade;
- No detalhe de cada cidade, deve-se exibir um forecast de 5 dias.

3. Requisitos não-funcionais
- Não foram especificados requisitos não-funcionais além do uso da API.

4. Implementação
- Exportar todos os arquivos para onde o sistema irá ser executado;
- Executar o script arquivo create.sql no banco de dados;
- Alterar nos arquivos insert_cidades.php e get_cidades.php as configurações de banco de dados:
	  $servername = "<IP do DB>";
	  $username = "<Usuário do DB>";
	  $password = "<Senha do DB>"; //Caso possuir
	  $conn = new mysqli($servername, $username); //Inserir o parâmetro $password caso possuir
