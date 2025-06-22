<?php

/**
 * Inheritance in PHP
 * Inheritance allows a class to use properties and methods of another class.
 * In this example the Cat class inherits from the Animal class.
 * The Cat class can use the speak method from the Animal class and also has its own method
 * called meow.
 * The Animal class has a constructor that initializes the name property.
 * The Cat class can access the name property from the Animal class.
 * This demonstrates how inheritance allows for code reuse and organization.
 * 
 * PHP supports single inheritance, meaning a class can only inherit from one parent class.
 * However, a class can implement multiple interfaces. 
 * This is a basic example of inheritance in PHP.
 * 
 * @package    OOP
 * @subpackage Inheritance
 * @author     Randika Nonis
 */

class Animal //class Animal is the parent class
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function speak()
    {
        return "The " . $this->name . " makes a sound.";
    }
}



class Cat extends Animal    //class Cat is the sub class of the parent class Animal
{
    public function meow()
    {
        return "The cat meows.";
    }
}


$animal = new Cat("Cat");
echo $animal->speak();
echo "\n";
echo $animal->meow();
echo "\n";
echo $animal->name;
echo "\n";
