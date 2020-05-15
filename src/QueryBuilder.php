<?php

namespace App;

class QueryBuilder
{
   protected $config;

    public function __construct()
    {
        $config = config();

        $this->pdo = Connection::connect($config);
    }

    public function getComicsFromDatabase()
    {
        $query = "SELECT * FROM comics WHERE id = 1";

        var_dump($this->pdo);

        return $this->pdo->query($query)->fetchAll($this->pdo::FETCH_OBJ);
    }

    public function registerToDatabase($name,$email,$password)
    {
        $query = "INSERT INTO user(name,email,password) VALUES(:'$name',:'$email',:'$password')";

        return $this->pdo->query($query);
    }

    public function checkIdentityOfUser($table,$email)
    {
         $query = "SELECT  '$table'  FROM '$table' WHERE email = '$email'";

         return $this->pdo->query($query)->fetch($this->pdo::FETCH_OBJ);
    }
    public function sendDataToDataBase($post)
    {
         $query = "INSERT INTO user(name,firstname,phoneNUM,email,subject,message,added) VALUES('$post[name]','$post[firstname]','$post[phoneNUM]','$post[email]','$post[subject]','$post[message]',NOW())";

         return $this->pdo->query($query);
    }

    public function getImageFromDatabase($post)
    {
          $query = "SELECT url FROM image WHERE name LIKE '$post%' ";

          return $this->pdo->query($query)->fetchAll($this->pdo::FETCH_COLUMN);
    }
}
