	CRUDTXT

CRUDTXT é um sistema CRUD em PHP que utiliza um arquivo .txt como banco de dados.
O sistema permite criar, listar, atualizar, excluir registros e realizar upload de imagens.
Foi desenvolvido para estudos práticos da disciplina Programação Web no curso de Análise e Desenvolvimento de Sistemas – FATEC.

	Objetivo

Demonstrar a implementação de um CRUD básico em PHP utilizando arquivos .txt em vez de banco de dados tradicional.

Exercitar conceitos de manipulação de arquivos, formularização de dados e upload de imagens.

Servir como material de apoio e prática para estudantes de Programação Web.

	Estrutura do Projeto
CRUDTXT/
│── img/              # Imagens utilizadas pelo sistema
│── uploads/          # Imagens enviadas pelos usuários
│── banco.txt         # Banco de dados em arquivo texto
│── create.php        # Inserção de registros
│── delete.php        # Exclusão de registros
│── formulario.php    # Formulário de entrada de dados
│── monta.php         # Página principal do CRUD
│── select.php        # Exibição de registros
│── update.php        # Atualização de registros
│── README.md         # Documentação do projeto

	Funcionalidades

Criar registros com dados e imagens.

Listar registros armazenados no banco.txt.

Atualizar registros existentes.

Excluir registros.

Upload e exibição de imagens associadas.

	Como Executar

Instale o WampServer ou outro servidor PHP (Xampp, Laragon, etc).

Copie a pasta CRUDTXT para o diretório:

www/ (Wamp)

htdocs/ (Xampp)

Inicie o servidor local.

No navegador, acesse:

http://localhost/CRUDTXT/monta.php

	Estrutura do Arquivo banco.txt

Cada registro é salvo em uma linha no formato:

ID|Nome|Idade|Email|Imagem


	Exemplo de registro:

1|João Silva|25|joao@email.com|uploads/joao.png

	Melhorias Futuras

Validação mais robusta nos formulários.

Estilização com CSS responsivo.

Implementação de paginação para listagem.

Evolução para banco de dados MySQL.

Implementação de busca e filtros nos registros.

	Requisitos Técnicos

PHP: versão 7.4 ou superior

Servidor local: WampServer, Xampp ou similar

Navegador atualizado

	Autor

Antonio Vaunilson da Silva
Estudante de Análise e Desenvolvimento de Sistemas – FATEC Ferraz de Vasconcelos
Disciplina: Programação Web