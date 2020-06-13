<?php
	require_once 'classe-pessoa.php';
 $p = new Pessoa("crudpdo","localhost","root","");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta  charset="uft-8">
	<title>Cadastro Pessoa</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<section id="esquerda">
		<form>
			<h2>Cadastrar Pessoa</h2>
			<label for="Nome">Nome</label>
			<input type="text" name="Nome" id="Nome">
			<label for="Telefone">Telefone</label>
			<input type="text" name="Telefone" id="Telefone">
			<label for="Email">Email</label>
			<input type="text" name="Email" id="Email">
			<input type="submit" value="Cadastrar">
		</form>
	</section>
	<section id="direita">
			<table>
				<tr id="titulo">
					<td>Nome</td>
					<td>Telefone</td>
					<td colspan="2">Email</td>
			</tr>
		<?php
			$dados = $p->buscarDados();
			if(count($dados)>0)
			{
				for($i=0; $i<count($dados); $i++)
				{
						echo "<tr>";
						foreach ($dados[$i] as $key => $v)
						{
							if($k != "id")
							{
								echo "<td>".$v."</td>";
							}
						}
						?>
							<td><a href="">Editar</a><a href="">Excluir</a></td>
							<?php
						echo "</tr>";
			   }
							?>
			
		<?php	
			}
		?>
			</table>		
		</section>
	</body>
</html>