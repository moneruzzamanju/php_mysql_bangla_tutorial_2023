<?php
class Dbconnection{
    protected $db;
    public function __construct(){
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=php_mysql_bangla_tutorial_2023", "root","");
           // echo"Connection successfull"; 

        }catch(PDOException $e){
            echo"Connection Failed".$e->getMessage(); 
        }
    }
}
?>