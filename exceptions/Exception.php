<?php
class InvalidCCNumberException extends InvalidArgumentException {
    public function __construct($message = "Invalid input. Please, try again", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

try {
    processCC();
}catch (InvalidCCNumberException $e){
    echo $e->getMessage() . " ";
    echo get_class($e);

//    echo $e->getPrevious()->getMessage() . " ";
//    echo get_class($e->getPrevious());
//    echo "\n";
}finally{
    echo "\n";
    echo "Final";
    echo "\n";
}


function processCC($cardNumber = null, $zipCode = null){
    try{
        validate($cardNumber, $zipCode);
    }catch (Exception $e){
        throw $e;
    }

    echo "Everything was well processed. Thanks";
}

function validate($cardNumber = null, $zipCode = null){
    if($cardNumber == null && $zipCode == null){
        throw new InvalidCCNumberException();
    }
}