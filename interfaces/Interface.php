<?php

interface TableInterface{
    public function save(array $data);
}

interface LogInterface{
    public function log($message);
}

class Table implements TableInterface, LogInterface, Countable {
    public function save(array $data){
        return "I've just created an interface and implemented it";
    }

    public function log($message){
        return $message . "\n";
    }

    public function count()
    {
        // TODO: Implement count() method. Already done, but just want to keep the syntax here
        return 35;
    }
}


echo (new Table())->save([]) . "\n";
echo (new Table())->log("Interfaces are just awesome. Really awesome!!!");
echo (new Table())->count() . "\n";