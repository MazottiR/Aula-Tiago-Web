Sistema de Biblioteca - PHP MVC
Este projeto implementa um sistema de gerenciamento de biblioteca desenvolvido em PHP, seguindo o padrão de arquitetura MVC (Model-View-Controller). O sistema permite gerenciar alunos, autores, categorias, livros e empréstimos em uma biblioteca.
Estrutura do Projeto
/
├── App/
│   ├── Controller/
│   │   ├── AlunoController.php
│   │   ├── AutorController.php
│   │   ├── CategoriaController.php
│   │   ├── Controller.php (classe base)
│   │   ├── EmprestimoController.php
│   │   ├── InicialController.php
│   │   ├── LivroController.php
│   │   └── LoginController.php
│   ├── DAO/
│   │   ├── AlunoDAO.php
│   │   ├── AutorDAO.php
│   │   ├── CategoriaDAO.php
│   │   ├── DAO.php (classe base)
│   │   ├── EmprestimoDAO.php
│   │   ├── LivroDAO.php
│   │   └── LoginDAO.php
│   ├── Model/
│   │   ├── Aluno.php
│   │   ├── Autor.php
│   │   ├── Categoria.php
│   │   ├── Emprestimo.php
│   │   ├── Livro.php
│   │   ├── Login.php
│   │   └── Model.php (classe base)
│   └── View/
│       ├── Aluno/
│       │   ├── form_aluno.php
│       │   └── lista_aluno.php
│       ├── Autor/
│       │   ├── form_autor.php
│       │   └── lista_autor.php
│       ├── Categoria/
│       │   ├── form_categoria.php
│       │   └── lista_categoria.php
│       ├── Emprestimo/
│       │   ├── form_emprestimo.php
│       │   └── lista_emprestimo.php
│       ├── Inicial/
│       │   └── home.php
│       ├── Livro/
│       │   ├── form_livro.php
│       │   └── lista_livro.php
│       └── Login/
│           └── form_login.php
├── autoload.php
├── config.php
├── index.php
└── routes.php
Funcionalidades
O sistema oferece as seguintes funcionalidades:

Autenticação: Login e logout de usuários
Alunos: Cadastro, visualização, edição e exclusão de alunos
Autores: Cadastro, visualização, edição e exclusão de autores
Categorias: Cadastro, visualização, edição e exclusão de categorias de livros
Livros: Cadastro, visualização, edição e exclusão de livros
Empréstimos: Registro, visualização, edição e exclusão de empréstimos de livros

Requisitos

PHP 8.0 ou superior
MySQL 5.7 ou superior
Servidor web (Apache, Nginx, etc.)

Instalação

Clone o repositório para o diretório do seu servidor web:
git clone https://github.com/seu-usuario/sistema-biblioteca.git

Configure as credenciais do banco de dados no arquivo config.php:
php$_ENV['db']['host'] = "localhost:3307"; // Ajuste conforme necessário
$_ENV['db']['user'] = "root";           // Substitua pelo seu usuário
$_ENV['db']['pass'] = "etecjau";        // Substitua pela sua senha
$_ENV['db']['database'] = "biblioteca"; // Nome do banco de dados

Importe o esquema do banco de dados (arquivo SQL fornecido separadamente).
Certifique-se de que o servidor web tenha permissões de leitura e escrita no diretório do projeto.
Acesse a aplicação pelo navegador (por exemplo, http://localhost/sistema-biblioteca/).

Estrutura do Banco de Dados
O sistema utiliza as seguintes tabelas:

aluno: Armazena informações dos alunos (id, nome, ra, curso)
autor: Armazena informações dos autores (id, nome, nascimento, cpf)
categoria: Armazena categorias de livros (id, descricao)
livro: Armazena informações dos livros (id, titulo, id_categoria, isbn, ano, editora)
livro_autor: Tabela de relacionamento entre livros e autores (id_livro, id_autor)
emprestimo: Registra empréstimos (id, id_usuario, id_aluno, id_livro, emprestimo, devolucao)
usuario: Armazena informações dos usuários do sistema (id, nome, email, senha)

Padrão MVC
O projeto segue o padrão Model-View-Controller (MVC):

Model: Contém a lógica de negócio e validação de dados
View: Interfaces de usuário (formulários e listagens)
Controller: Gerencia as requisições do usuário e coordena Model e View
DAO (Data Access Object): Camada de acesso a dados que isola o banco de dados

Características de Implementação

Proteção de rotas através de sessão
Validação de dados nos modelos
Tratamento de exceções
Autoload de classes
Uso de namespaces
Tipos de retorno explícitos
Propriedades com getters e setters tipados

Contribuição
Para contribuir com este projeto:

Faça um fork do repositório
Crie um branch para sua funcionalidade (git checkout -b feature/nova-funcionalidade)
Commit suas alterações (git commit -m 'Adiciona nova funcionalidade')
Push para o branch (git push origin feature/nova-funcionalidade)
Abra um Pull Request
