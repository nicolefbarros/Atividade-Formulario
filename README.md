Atividade Formulário : Nicole Barros e Thifany Godoi
<h1>Atividade-Formulário : Nicole Barros e Thifany Godoi</h1>

<hr>

<h1>Sistema de Cadastro de Leads / Clientes 🚀</h1>

<p>
  Projeto desenvolvido como parte da atividade prática da disciplina de
  <strong>Programação Web II</strong> no Curso Técnico em Desenvolvimento de Sistemas da
  <strong>ETEC Irmã Agostina</strong> (Centro Paula Souza).
</p>

<h2>📌 Sobre o Projeto</h2>

<p>
  O sistema consiste em um backend em PHP para captação e processamento seguro de dados cadastrais
  enviados via formulário HTML. O foco do projeto foi implementar validações
  lógicas, purificação de entradas para segurança contra scripts maliciosos e
  formatação adequada na exibição das informações.
</p>

<hr>


<h2>🔒 Regras de Negócio e Funcionalidades</h2>

<ul>
  <li>Validação da idade: deve ser um valor numérico inteiro maior que zero.</li>
  <li>Cadastro permitido apenas para maiores de 18 anos.</li>
  <li>Formatação automática do nome com a primeira letra de cada palavra em maiúscula.</li>
  <li>Verificação de preenchimento de todos os campos obrigatórios.</li>
  <li>Sanitização do campo Observações contra injeção de scripts (XSS) usando <code>htmlspecialchars()</code>.</li>
</ul>

<hr>

<h2>Matriz de Testes</h2>

<table>
  <thead>
    <tr>
      <th>Cenário de Teste</th>
      <th>O que você digitou</th>
      <th>O que o PHP exibiu na tela (Resultado Esperado)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><strong>Teste 1: Idade com letras</strong></td>
      <td><code>vinte anos</code></td>
      <td>Erro: A idade deve ser um número inteiro maior que zero.</td>
    </tr>
    <tr>
      <td><strong>Teste 2: Menor de idade</strong></td>
      <td><code>15</code></td>
      <td>Cadastro permitido apenas para maiores de 18 anos.</td>
    </tr>
    <tr>
      <td><strong>Teste 3: Nome em minúsculo</strong></td>
      <td><code>maria de souza</code></td>
      <td>Registro Processado com Sucesso!!! Nome exibido como: Maria De Souza.</td>
    </tr>
    <tr>
      <td><strong>Teste 4: Campo em branco</strong></td>
      <td>Deixar o e-mail vazio</td>
      <td>Erro: Preencha todos os campos obrigatórios.</td>
    </tr>
  </tbody>
</table>

