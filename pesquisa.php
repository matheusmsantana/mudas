<?php
	//recebemos nosso parâmetro vindo do form
	$parametro = isse
	´t($_POST['pesquisaCliente']) ? $_POST['pesquisaCliente'] : null;
	$msg = "";
	//começamos a concatenar nossa tabela
	$msg .="<table class='table table-hover'>";
	$msg .="	<thead>";
	$msg .="		<tr>";
	$msg .="			<th>#</th>";
	$msg .="			<th>Nome:</th>";
	$msg .="			<th>E-mail:</th>";
	$msg .="		</tr>";
	$msg .="	</thead>";
	$msg .="	<tbody>";
			
		//requerimos a classe de conexão
				require_once('class/Conexao.class.php');
					try {
						$pdo = new Conexao(); 
						$resultado = $pdo->select("SELECT * FROM cliente WHERE nome LIKE '$parametro%' ORDER BY nome ASC");
						$pdo->desconectar();
								
						}catch (PDOException $e){
							echo $e->getMessage();
						}	
						//resgata os dados na tabela
						if(count($resultado)){
							$cont = 0;
							foreach ($resultado as $res) {
								$cont++;

	$msg .="				<tr>";
	$msg .="					<td>".$cont."</td>";
	$msg .="					<td>".$res['nome']."</td>";
	$msg .="					<td>".$res['email']."</td>";
	$msg .="				</tr>";
							}	
						}else{
							$msg = "";
							$msg .="Nenhum resultado foi encontrado...";
						}
	$msg .="	</tbody>";
	$msg .="</table>";
	//retorna a msg concatenada
	echo $msg;		
		

?>