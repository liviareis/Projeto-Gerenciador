<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<title>Gerenciador de Projetos e Tarefas: Novo Projeto</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">   
	</head>
	
	<body>
	  <div id="menu">
		<ul>
			  <li><a href="pagIn1.php"><img src="logo.png" style="width:25%;height:25%;"></a></li>
			  <li><a href="pagIn1.php"><img src="logo2.png" style="width:30%;height:30%;"></a></li>
		</ul>
		<ul class="snip1226">
			  <li><a href="visualizar.php" data-hover="Contact">Quadro</a></li>
			  <li><a href="addTarefa.php" data-hover="Adiciar Tarefa">+ Tarefa</a></li>
			  <li><a href="editProj.php" data-hover="EditarP">Editar Projeto</a></li>
			  <li><a href="editTarefa.php" data-hover="EditarT">Editar Tarefa</a></li>
			   <li><a href="excluirProj.php" data-hover="ExcluirT">Excluir Projeto</a></li>
			  <li><a href="excluirTarefa.php" data-hover="ExcluirT">Excluir Tarefa</a></li>
		</ul>
	  </div>

	  <div id="corpocad">
		<form method="post">

		<ul>
			<h4>Adicionar Projeto:</h4>
			<li>Título do Projeto: <input type="text" name="titulo" placeholder="Informe o Título do Projeto" class="formcad"></li>
			<li>Descrição do Projeto: <input type="textarea" name="descricao" placeholder="Descreva o Projeto" class="formcad"> </li>
			<li>Data de cadastro:  <input type="date"  name="data" class="formcad"></li>
			<li>Status: <select name = "sts"><option value = "Analise">Em Análise</option>
								<option value = "Desenvolvimento">Em desenvolvimento</option>
								<option value = "REvisao">Em revisão</option>
								<option value = "Concluido"> Concluido </option>
						</select></li>
			<li><input type="submit" value="Enviar" name="enviar" class="formcad"></li>
		</ul>

		</form>
	  </div>
		<?php 
			if (isset($_POST['enviar'])) {
				
				$titulo = $_POST['titulo'];
				$descricao = $_POST['descricao'];
				$data = $_POST['data'];
				$status = $_POST['sts'];

				$conn = mysqli_connect("localhost", "root", "", "gerenciador");

				
				// se não estão vazias as variaveis necessarias
				if (!empty($titulo) && !empty($descricao) && !empty($data) && !empty($status)){
					$sql = "INSERT INTO projeto (titulo, descricao, data, status) VALUES ('$titulo', '$descricao', '$data', '$status')";

					// executa a consulta
					if (mysqli_query($conn, $sql) ){
						// consulta executada com sucesso
						// exibindo um poupup javascript para informar o usuario
						echo "<script>alert('Cadastro realizado com sucesso!');</script>";
					} else {
						// houve um erro ao executar a consulta
						echo "<br>SQL gerado foi: $sql<br>";
					}

				} else {
					echo "<p>Por favor, preencha todos os campos!";
				}
			}
		?>
	</body>
</html>