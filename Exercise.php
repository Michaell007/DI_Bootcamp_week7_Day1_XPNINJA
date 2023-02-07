<?php

// Chaining Methods And Properties
class User
{
    public string $firstName;

    public function __construct($name)
    {
        $this->firstName = $name;
    }

    public function hello()
    {
        $this->firstName = "hello, $this->firstName";
        return $this;
    }

    public function register()
    {
        $this->firstName = $this->firstName . " >> registered";
        return $this;
    }

    public function mail()
    {
        $this->firstName = $this->firstName . " >> email sent";
        return $this;
    }

    
}

$user = new User("Jane");

$user->hello()->register()->mail();
echo $user->firstName;
