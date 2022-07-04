<?php

class Student
{
    private $studentName;
    private $registration;

    public function __construct($name, $number)
    {
        $this->studentName = $name;
        $this->registration = $number;
    }

    /**
     * Function to print the Student Details
     * Non-Parameterized Function
     */
    public function getStudentDetails()
    {
        echo "Student Name:: " . $this->studentName;
        echo "\nRegistration Number:: " . $this->registration;
    }
}
class College
{
    /**
     * Function to Create object of student class
     * Passing Name and Number as parameters
     * Returns the object of student class
     */
    public static function createObject($name, $number)
    {
        return new Student($name, $number);
    }
}

$college = College::createObject("Premkumar", 152210335);
$college->getStudentDetails();