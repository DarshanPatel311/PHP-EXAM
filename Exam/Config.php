<?php

class Config
{
    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "student";
    private $create;


    public function __construct()
    {
        $this->create = mysqli_connect($this->localhost, $this->username, $this->password, $this->database);
    }

    function insertDatabase($name, $email, $phone)
    {
        $query = "INSERT INTO studentdata (name,email,phone) VALUES ('$name','$email',$phone)";

        $insertDate = mysqli_query($this->create, $query);

        return $insertDate;
    }

    function selectDatabase()
    {
        $query = "SELECT * FROM studentdata";

        $selectData = mysqli_query($this->create, $query);

        return $selectData;
    }

    function removeProduct($id)
    {
        $query = "DELETE FROM studentdata WHERE id=$id";
        $res =mysqli_query($this->create, $query);
        return $res;
    }



    function updateProduct($id, $name, $email, $phone)
    {
        $query = "UPDATE studentData SET name='$name',price=$email,description='$phone' WHERE id=$id";
        mysqli_query($this->create, $query);
    }
}


?>