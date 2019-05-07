<?php
class conexao{
	function connect(){
		try{
			$this->$conn = new PDO ("mysql:host=localhost;dbname=projeto","carlos","1234");
			return $this->$conn;
		}catch(PDOException $exc){
			echo "error ".$exc->getMessage();
		}
	}
}
?>