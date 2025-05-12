Sistema de Biblioteca 📚

Sistema de gerenciamento de biblioteca desenvolvido em PHP utilizando o padrão arquitetural MVC (Model-View-Controller). Ideal para bibliotecas escolares, universitárias ou pequenas bibliotecas públicas.

✨ Funcionalidades

🔐 Autenticação segura - Sistema de login/logout com opção "lembrar-me"
👥 Gerenciamento de Alunos - Cadastro, visualização, edição e exclusão
✍️ Controle de Autores - Cadastro completo com validação de CPF
📑 Categorias de Livros - Organização do acervo por categorias
📖 Gerenciamento de Livros - Cadastro detalhado incluindo ISBN e editora
📅 Sistema de Empréstimos - Controle de empréstimos e devoluções
🛡️ Controle de Acesso - Rotas protegidas por autenticação

🛠️ Tecnologias

PHP 8.0+ - Utilizando recursos modernos como tipos de retorno, promoted properties
MySQL - Banco de dados relacional para armazenamento
Pattern MVC - Arquitetura Model-View-Controller para separação de responsabilidades
DAO Pattern - Data Access Object para acesso ao banco de dados
Namespaces - Organização e prevenção de conflitos de nomes
Composer - Autoload e gerenciamento de dependências
PDO - Camada de abstração para acesso ao banco de dados

📋 Pré-requisitos

PHP 8.0 ou superior
MySQL 5.7 ou superior
Servidor web (Apache, Nginx)
Extensões PHP: PDO, PDO_MySQL

🚀 Instalação
1. Clone o repositório
bashgit clone https://github.com/seu-usuario/sistema-biblioteca.git
cd sistema-biblioteca
2. Configure o banco de dados
Edite o arquivo config.php com suas credenciais de banco de dados:
php$_ENV['db']['host'] = "localhost:3307";
$_ENV['db']['user'] = "seu_usuario";
$_ENV['db']['pass'] = "sua_senha";
$_ENV['db']['database'] = "biblioteca";
3. Importe o banco de dados
bashmysql -u seu_usuario -p biblioteca < docs/database/schema.sql
4. Configure o servidor web
Aponte o servidor web para o diretório do projeto ou use o servidor interno do PHP:
bashphp -S localhost:8000
5. Acesse o sistema
Abra o navegador e acesse:
http://localhost:8000
Credenciais padrão:

Email: admin@biblioteca.com
Senha: admin123

📁 Estrutura do Projeto
/
├── App/
│   ├── Controller/     # Controladores da aplicação
│   ├── DAO/            # Camada de acesso a dados
│   ├── Model/          # Modelos de negócio
│   └── View/           # Interfaces de usuário
├── public/             # Arquivos públicos (CSS, JS, imagens)
├── docs/               # Documentação e arquivos SQL
├── autoload.php        # Carregamento automático de classes
├── config.php          # Configurações da aplicação
├── index.php           # Ponto de entrada da aplicação
└── routes.php          # Definição de rotas

📊 Esquema do Banco de Dados
Tabelas principais:

aluno: id, nome, ra, curso
autor: id, nome, nascimento, cpf
categoria: id, descricao
livro: id, titulo, id_categoria, isbn, ano, editora
emprestimo: id, id_usuario, id_aluno, id_livro, emprestimo, devolucao
usuario: id, nome, email, senha

🧩 Padrões de Projeto
O sistema implementa os seguintes padrões:

MVC (Model-View-Controller): Separação clara de responsabilidades

Model: Lógica de negócio e validação
View: Interfaces de usuário
Controller: Gerenciamento de requisições


DAO (Data Access Object): Isola a lógica de acesso a dados
Front Controller: Todas as requisições passam pelo index.php
Active Record: Modelos com métodos para persistência


📝 Convenções de Código

Siga o padrão PSR-4 para autoload
Classes em PascalCase
Métodos e variáveis em camelCase
Constantes em SNAKE_CASE maiúsculo
Indentação com 4 espaços

🛠️ Como ver funcionando:

Abra a pasta App no VS Code e via terminal inicialize o servidor do PHP
Se necessário, edite os dados de conexão com MySQL no PHP (host, porta, usuário e senha)
php -S localhost:8000
Acesse no seu navegador: http://localhost:8000
