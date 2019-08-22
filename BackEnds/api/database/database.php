<?php
class Database{
  private $servername = "127.0.0.1";
  private $username = "root";
  private $password = "";
  private $databaseName = "apitest";

  public $conn;

  public function getConnection(){
    $this->conn = null;
    try{
      $this->conn = mysqli_connect($this->servername,$this->username, $this->password,$this->databaseName);
    } catch(Exception $e){
      echo "Connection Failed";
    }


  return $this->conn;
}
}
  ?>
