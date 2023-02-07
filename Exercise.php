<?php

// Chaining Methods And Properties
class User
{
    private string $firstName;

    function __construct($name) {
        $this->firstName = $name;
    }

    public function hello()
    {
        echo "hello, $this->firstName";
        return $this;
    }

    public function register()
    {
        echo " >> registered";
        return $this;
    }

    public function mail()
    {
        echo " >> email sent";
        return $this;
    }
    
}

// function test
function test($name) {
    $user = new User($name);
    $user->hello()->register()->mail();
}

echo test("Joe");
