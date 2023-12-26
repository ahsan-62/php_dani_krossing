<?php

trait MadeInChina{

public function ShowMessage(){
    
return "This Car in made in China";
}
}

trait MadeInUsa{

    public function ShowInfo(){
        
    return "This Car in made in Usa";
    }
    }

class Car {

    use MadeInChina,MadeInUsa;
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

}


$jun=new Car("AHSAN");

echo $jun->ShowMessage();
echo"<br>";
echo $jun->ShowInfo();
echo"<br>";




?>