<?php
interface Employee
{
    public function getEmployeeType();
}

class Student implements Employee
{
    public function getEmployeeType()
    {
        echo "\nI am a Student.";
    }
}
class FullStackDeveloper implements Employee
{
    public function getEmployeeType()
    {
        echo "\nI am a Full Stack Developer.";
    }
}
class Company implements Employee
{
    public $employee;
    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }
    public function getEmployeeType()
    {
        $this->employee->getEmployeeType();
    }
}

$student = new Student();
$fullStackDeveloper = new FullStackDeveloper();
$studentCompany = new Company($student);
$fullStackDeveloperCompany = new Company($fullStackDeveloper);
$studentCompany->getEmployeeType();
$fullStackDeveloperCompany->getEmployeeType();