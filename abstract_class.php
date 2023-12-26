<?php

abstract class Car{
    public $name;

public function __construct($name) {
    $this->name = $name;
}

abstract function intro() : string;

}

class Audi extends Car{

    public $made_in;

public function intro() :string {
    return "Choose $this->made_in quality $this->name";
}


function myown(){
    return "This my own method";
}

}

$ahsan=new Audi("Audi");
$ahsan->made_in="Jermany";

print_r($ahsan);
echo "<br>";
echo $ahsan->intro();
echo "<br>";
echo $ahsan->myown();




?>