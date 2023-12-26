<?php



class FlashMessage{


const created="Your product added Succesfully";
const edited="Your Product Updated Succesfully";
const deleted="Your Product Deleted Succesfully";
const error="This Task is Error";

function ProductStored()
 {
 echo self::created;   
 }
 function ProductUpdated()
 {
 echo self::edited;   
 }
 function ProductDeleted()
 {
 echo self::deleted;   
 }
 function Error()
 {
 echo self::error;   
 }

}

$trigger="updated";

$message=new FlashMessage;

switch($trigger){

    case"created":
        $message->ProductStored();
        break;
    case"updated":
        $message->ProductUpdated();
        break;
}


?>