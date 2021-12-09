<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<title>Gerenciador de Projetos e Tarefas: Nova Tarefa</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">   
	</head>
	
	<body>
		<div id="menu">
			<ul>
			  <li><a href="pagIn1.php"><img src="logo.png" style="width:25%; height:25%;"></a></li>
			  <li><a href="pagIn1.php"><img src="logo2.png" style="width:30%;height:30%;"></a></li>			  
			</ul>
			
			<ul class="snip1226">
			  <li><a href="addProj.php" data-hover="Adicionar Projeto">+ Projeto</a></li>
			  <li><a href="addTarefa.php" data-hover="Adiciar Tarefa">+ Tarefa</a></li>
			  <li><a href="editProj.php" data-hover="EditP">Editar Projeto</a></li>
			  <li><a href="editTarefa.php" data-hover="EditT">Editar Tarefa</a></li>
			  <li><a href="excluirProj.php" data-hover="ExP">Excluir Projeto</a></li>
			  <li><a href="ExcluirTarefa.php" data-hover="ExP">Excluir Tarefa</a></li>
			</ul>
		</div>
	  
		<div id="projeto">
			<h3>Projetos:</h3>
			<?php
			
				$conn = mysqli_connect("localhost", "root", "", "gerenciador");
				
				$query = "SELECT * FROM projeto";
				$result = mysqli_query($conn, $query);
				
				while($fetch = mysqli_fetch_row($result)){
					echo "<p>";
					
					foreach ($fetch as $value){
						echo $value . " | ";
					}
					echo "</p>";
				}
			
			?>
		</div>
	  
		<div id="tarefa">
			<h3>Tarefas: </h3>
			<?php
			
				$conn = mysqli_connect("localhost", "root", "", "gerenciador");
				
				$query = "SELECT * FROM tarefa";
				$result = mysqli_query($conn, $query);
				
				while($fetch = mysqli_fetch_row($result)){
					echo "<p>";
					foreach ($fetch as $value){
						echo $value . " | ";
					}
					echo "</p>";
				}
			
			?>
		</div>
	</body>
</html>