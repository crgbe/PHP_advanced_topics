<?php
abstract class Database{
    abstract public function connection();

    public function disconnect($message){
        //Code to implement database disconnection
    }
}

class MySQL extends Database{
    public function connection()
    {
        // TODO: Implement connection() method.
        echo "Instead of this echo, you should implement a code for database connection\n";
    }
}

//$db = new Database();

$db = new MySQL();
$db->connection();