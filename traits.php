<?php

/* * Traits in PHP are a mechanism for code reuse in single inheritance languages like PHP.
 * They allow you to include methods from one class into another without using inheritance.
 * This is useful for sharing functionality across multiple classes without duplicating code.
 */

class User
{
    use Logger;
    // Traits can be used to include methods in a class

    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

$user = new User('Randika', 'randika@gmail.com');
echo $user->getName();
echo "\n";
echo $user->getEmail();
echo "\n";
$user->Log($user->getName(), $user->getEmail());


trait Logger
{
    public function Log($name, $email)
    {
        echo "Logging user: $name with email: $email\n";
    }
}
