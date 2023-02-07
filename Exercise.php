<?php

// Chaining Methods And Properties
class User
{
    private string $firstName;

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

    public function getFirstName() {
        return $this->firstName;
    }

}

// function test
function test($name) {
    $user = new User($name);
    $user->hello()->register()->mail();
    return $user->getFirstName();
}

echo test("Joe");
