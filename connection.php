<?php

    class Connection{
        public $conn; 
        public function __construct(){
            $this->conn = new PDO('mysql:host=localhost;dbname=exam','root','');
            //echo "Connected";
        }
        public function insertData($market,$money,$tour){
            try{
                $statement = $this->conn->prepare('INSERT INTO problem_list (market,money,tour) VALUES (:market,:money,:money)');
                $statement->execute(
                    array(
                        ':market'=>$market,
                        ':money'=>$money,
                        ':tour'=>$tour
                )
            );
            echo "Inserted";
            }catch(\Exception $e){
                echo "ERROR".$e->getMessage();
            }
        }
        
        
        public function getAll($query,$array)
	{
		$statement = $this->conn->prepare($query);
		$statement->execute($array);
		return $statement->fetchAll();
	}
        
        public function update($query,$array)
	{
		$statement = $this->conn->prepare($query);
		$statement->execute($array);
	}
    }

?>