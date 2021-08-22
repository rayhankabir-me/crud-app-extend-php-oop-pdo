<?php 

include "DB.php";

class Student{

    private $table = 'users';

    //create data
    private $name;
    private $department;
    private $age;

    public function setName($name){
        $this->name = $name;
    }
    public function setDepartment($department){
        $this->department = $department;
    }
    public function setAge($age){
        $this->age = $age;
    }

    //creaet data

    public function createData(){

        $sql = "INSERT INTO $this->table (name, department, age) VALUES (:name, :department, :age)";
        $stmt = DB::prepareOwn($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':department', $this->department);
        $stmt->bindParam(':age', $this->age);
        $stmt->execute();
    }

    //read by id

    public function readById($id){

        $sql = "SELECT * FROM $this->table WHERE ID=:id ";
        $stmt = DB::prepareOwn($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }

public function readAll(){

    $sql = "SELECT * FROM $this->table";
    $stmt = DB::prepareOwn($sql);
    $stmt->execute();
    return $stmt->fetchAll();
    
}


}
?>