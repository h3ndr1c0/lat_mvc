<?php

class Room_model{
    private $dbh; //data base handler
    private $stmt;

    public function __construct(){
        //data source name
        $dsn = 'msql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', 'root');
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }



    public function getAllRoom(){

        $this->stmt = $this->dbh->prepare('SELECT * FROM room');
        $this->stmt->execute();
        return $this->stmt->fetchALL(PDO::FETCH_ASSOC);

    }

}