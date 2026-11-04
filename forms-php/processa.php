<?php

 //Nicole e Thifany
$nome        = trim($_POST["nome"] ?? "");
$email       = trim($_POST["email"] ?? "");
$idade       = trim($_POST["idade"] ?? "");
$cidade      = trim($_POST["cidade"] ?? "");
$genero      = trim($_POST["genero"] ?? "");
$observacoes = trim($_POST["observacoes"] ?? "");
 

if ($nome == "" || $email == "" || $idade == "" || $cidade == "" || $genero == "") {
    die("Erro: Preencha todos os campos obrigatórios.");
}
if (!ctype_digit($idade) || $idade <= 0) {
    die("Erro: A idade deve ser um número inteiro maior que zero.");
}
if ($idade < 18) {
    die("Cadastro permitido apenas para maiores de 18 anos.");
}
if ($genero != "Masculino" && $genero != "Feminino" && $genero != "Outro") {
    die("Erro: Gênero inválido.");
}
 

$nome   = mb_convert_case($nome, MB_CASE_TITLE, "UTF-8");
$cidade = mb_convert_case($cidade, MB_CASE_TITLE, "UTF-8");
$nome        = htmlspecialchars($nome);
$email       = htmlspecialchars($email);
$cidade      = htmlspecialchars($cidade);
$observacoes = htmlspecialchars($observacoes);
?>
<div class="resposta-sucesso">
<h3>Registro Processado com Sucesso!!!</h3>
<hr>
<ul>
<li><strong>Nome:</strong> <?php echo $nome; ?></li>
<li><strong>E-mail:</strong> <?php echo $email; ?></li>
<li><strong>Idade:</strong> <?php echo $idade; ?> anos</li>
<li><strong>Cidade:</strong> <?php echo $cidade; ?></li>
<li><strong>Gênero:</strong> <?php echo $genero; ?></li>
<li><strong>Observações:</strong> <?php echo $observacoes != "" ? $observacoes : "Nenhuma"; ?></li>
</ul>
<a href="index.php" class="btn-retornar">Voltar ao Formulário</a>
</div>
 

