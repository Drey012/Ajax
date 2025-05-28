# 📚 Biblioteca - Sistema de Consulta de Livros

Este é um projeto de sistema web simples para consulta de livros cadastrados em um banco de dados. O sistema permite filtrar obras por **título**, **autor** e **ano de publicação**, com resultados exibidos dinamicamente sem recarregar a página.

---

## ✨ Funcionalidades

- 🔍 Busca dinâmica por título, autor e ano.
- 📅 Filtro por ano desde o século XX até hoje.
- 📖 Listagem de livros com título, autor e ano.
- ⚡ Requisições assíncronas via JavaScript (AJAX).
- 🎨 Interface com Tailwind CSS.

---

## 🧑‍💻 Tecnologias Utilizadas

- **PHP (PDO)** – Backend e integração com banco de dados.
- **MySQL** – Armazenamento dos dados dos livros.
- **JavaScript (vanilla)** – Requisições assíncronas (fetch API).
- **Tailwind CSS** – Estilização responsiva e moderna.
- **HTML5** – Estrutura da aplicação.

---

## ⚙️ Como Executar o Projeto

1. Clone o repositório:
   ```
   git clone https://github.com/Drey012/Ajax.git
   cd Ajax
2. Inicie o servidor PHP:
    ```
    php -S localhost:3006
    ```
3. Acesse no navegador:
   ```
   localhost:3006
   ```

## 🗃️ Estrutura do Banco de Dados
_Livros_
  | Campo           | Tipo     |
  | --------------- | -------- |
  | id              | INT (PK) |
  | titulo          | VARCHAR  |
  | autor           | VARCHAR  |
  | ano\_publicacao | INT      |

   
