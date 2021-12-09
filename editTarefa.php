<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<title>Gerenciador de Projetos e Tarefas: Nova Tarefa</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">   
	</head>
	
	<body>
	  <div id="menu">
		<ul>
			  <li><a href="pagIn1.php"><img src="logo.png" style="width:25%;height:25%;"></a></li>
			  <li><a href="pagIn1.php"><img src="logo2.png" style="width:30%;height:3
			  0%;"></a></li>
		</ul>
		<ul class="snip1226">
			  <li><a href="visualizar.php" data-hover="Contact">Quadro</a></li>
			  <li><a href="addProj.php" data-hover="EditarP">+ Projeto</a></li>
			  <li><a href="addTarefa.php" data-hover="Adiciar Tarefa">+ Tarefa</a></li>
			  <li><a href="editProj.php" data-hover="EditarT">Editar Projeto</a></li>
			   <li><a href="excluirProj.php" data-hover="ExcluirT">Excluir Projeto</a></li>
			  <li><a href="excluirTarefa.php" data-hover="ExcluirT">Excluir Tarefa</a></li>
		</ul>
	  </div>

	  <div id="corpocad">
		<form method="post">

		<ul>
			<h4>Editar Tarefa:</h4>
			<li>Título da Tarefa: <input type="text" name="titulo" placeholder="Informe o Título da Tarefa" class="formcad"></li>
			<li>Status: <select name="status"><option value = "analise">Em Análise</option>
								<option value = "Desenvolvimento">Em desenvolvimento</option>
								<option value = "Revisão">Em revisão</option>
								<option value = "Concluido"> Concluido </option>
						</select></li>
			<li><input type="submit" value="Enviar" name="enviar" class="formcad"></li>
		</ul>

		</form>
 	 </div>
		<?php 
			if (isset($_POST['enviar'])) {

				$titulo = $_POST['titulo'];
				$status = $_POST['status'];

				$conn = mysqli_connect("localhost", "root", "", "gerenciador");


				if (!empty($titulo) && !empty($status)){
					$sql = "UPDATE `tarefa` SET `status` = '$status' WHERE `tarefa`.`titulo` = '$titulo'"; 

					// executa a consulta
					if (mysqli_query($conn, $sql) ){
						// consulta executada com sucesso
						// exibindo um poupup javascript para informar o usuario
						echo "<script>alert('Cadastro editado com sucesso!');</script>";
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
