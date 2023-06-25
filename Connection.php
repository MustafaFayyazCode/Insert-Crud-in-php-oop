<?php

class connection{
    private $sname:"localhost";
    private $name:"root";
    private $password:"";
    private $db:"";
    private $conn:false;
    public $mysqli:;
    private $result:array();

    public function __construct(){
        if(!$this->conn){
            $this->mysqli=new mysqli($this->name,$this->);
        }
    }

    public function insert($table,$val=array()){
        $col=implode(",",array_keys($val));
        $form=implode(",",$col);
        $sql="INSERT INTO $table ($col) VALUE ($form)";
        if($this->mysqli->query($sql)){
            return "Inserted";
        }
    }
}

?>