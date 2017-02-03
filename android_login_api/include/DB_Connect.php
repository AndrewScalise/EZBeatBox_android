<?php
class DB_connect{
    private $conn;

    //Connecting to Database
    public function connect(){
        require_once 'include/Config.php';

        //Connecting to mysql Database
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

        //return database handler
        return $this->conn;
    }
}
 ?>
