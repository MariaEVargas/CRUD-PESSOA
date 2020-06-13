<?php

Class Pessoa{
	private $pdo;
	//6 funcoes
	//CONEXAO COM O BANCO DE DADOS
	public function _construct($dbname, $host, $user, $senha)
	{
		try 
		{
			$this->pdo = new PDO("mysql:dbname=".$dbname.";host=",$host,$user,$senha);
			
		} catch (PDOException $e) {
			echo "Erro com banco de dados:".$e->getMessage();
			exit();
		}
		catch (Exception $e) {
			echo "Erro com generico".$e->getMessage();
			exit();
		}
	}
	// FUNCAO PARA BUSCAR OS DADOS E COLOCAR NO CANTO DIREITO DA TELA
	public function buscarDados()
	{
		$res = array();
		$cmd = $this->pdo->query("SELECT * FROM pessoa ORDER BY nome");
		$res = $cmd->fetchAll(PD0::FETCH_ASSOC);
		return $res;
	}
}


?>