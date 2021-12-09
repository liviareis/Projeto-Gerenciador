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
			  <li><a href="addProj.php" data-hover="Adicionar Projeto">+ Projeto</a></li>
			  <li><a href="addTarefa.php" data-hover="Adiciar Tarefa">+ Tarefa</a></li>
			  <li><a href="editProj.php" data-hover="EditarP">Editar Projeto</a></li>
			  <li><a href="editTarefa.php" data-hover="EditarT">Editar Tarefa</a></li>
			  <li><a href="excluirTarefa.php" data-hover="ExcluirT">Excluir Tarefa</a></li>
		</ul>
	  </div>

	  <div id="corpocad">
		<form method="post">

		<ul>
			<h4>Excluir Projeto:</h4>
			<li>Título do Projeto: <input type="text" name="titulo" placeholder="Informe o Título do Projeto" class="formcad"></li>
			<li><input type="submit" value="Enviar" name="enviar" class="formcad"></li>
		</ul>

		</form>
	  </div>
		<?php 
			if (isset($_POST['enviar'])) {
				
				$titulo = $_POST['titulo'];
	
				$conn = mysqli_connect("localhost", "root", "", "gerenciador");

				if (!empty($titulo)){
					$sql = "DELETE FROM `projeto` WHERE `projeto`.`titulo` = '$titulo'";

					// executa a consulta
					if (mysqli_query($conn, $sql) ){
						// consulta executada com sucesso
						// exibindo um poupup javascript para informar o usuario
						echo "<script>alert('Projeto Removido com sucesso!');</script>";
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