<?php

class Person
{
    protected $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getName()
    {
        return $this->lastName;
    }
}

class Student extends Person
{
    private $studentNr;

    public function setNr($studentNr)
    {
        $this->studentNr = $studentNr;
    }

    public function getStudent()
    {
        //return $this->
    }
}

$student1 = new Student('Jan', 'Janssen');
$student1->setNr(4012031);

$person1 = new Person('Piet', 'Janssen');