<?php
namespace Traits;

trait Log{
    protected function log($message){
        echo "$message\n";
    }
}

class Table{
    use Log;

    public function save(){
        $this->log("Save message here");
    }
}

(new Table())->save();