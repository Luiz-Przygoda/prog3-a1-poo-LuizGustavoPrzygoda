# Formulário Interativo com PHP, Sessões e Cookies

**Autor:** Luiz Gustavo da Silva Przygoda 
**Turma:** Ciência da Computação 5º periodo - UNOESC São Miguel do Oeste 
**Matéria:** Programação III

---

## 📋 Descrição do Projeto

Este projeto consiste em um mini sistema de login desenvolvido em PHP, com as seguintes funcionalidades:

- Formulário de entrada com nome, e-mail e senha
- Armazenamento do nome na sessão
- Armazenamento do e-mail via cookie (por 1 hora)
- Página de boas-vindas personalizada
- Logout que encerra a sessão e limpa os cookies
- Indicador visual de força da senha (fraca, média ou forte), com cor e texto
- Interface moderna com fundo estilizado e responsivo

---

## 🧰 Tecnologias Utilizadas

- HTML5 & CSS3
- PHP 7+
- JavaScript (vanilla)
- Sessões e Cookies

---

## 💻 Instruções para Executar Localmente (com XAMPP)

1. **Instale o XAMPP**
   - Site oficial: https://www.apachefriends.org/pt_br/index.html

2. **Inicie o servidor Apache**
   - Abra o XAMPP Control Panel
   - Clique em `Start` ao lado de **Apache**

3. **Coloque os arquivos do projeto na pasta certa**
   - Vá até a pasta onde o XAMPP está instalado (geralmente `C:/xampp/htdocs`)
   - Crie uma pasta chamada `formulario_php`
   - Copie todos os arquivos do projeto para dentro dessa pasta

4. **Acesse no navegador**
   - Abra seu navegador e vá até:  
     `http://localhost/formulario_php/`

5. **Use o formulário**
   - Preencha seu nome, e-mail e senha
   - Observe a força da senha sendo exibida em tempo real
   - Após login, você será direcionado à página de boas-vindas

---

## 🚪 Logout

Clique em "Sair" na página de boas-vindas para encerrar a sessão e remover o cookie.

---

## 📂 Estrutura do Projeto

```
formulario_php/
├── index.php        # Formulário de login
├── processa.php     # Processamento dos dados do login
├── welcome.php      # Página de boas-vindas
├── logout.php       # Finaliza sessão e limpa cookie
└── README.md        # Instruções e descrição do projeto
```

---

Desenvolvido com dedicação 💜 como parte da disciplina de Programação III da UNOESC.
