<?php
namespace App;

include 'Project.php';
use Project\Table as ProjectTable;

class Table{
    public static function get(){
        echo "App.Table.get\n";
    }
}

Table::get();
ProjectTable::get();