<?php 

include "DB.php";

class Student{

    private $table = 'users';


public function readAll(){

    $sql = "SELECT * FROM $this->table";
    $stmt = DB::prepareOwn($sql);
    $stmt->execute();
    return $stmt->fetchAll();
    
}


}
?>