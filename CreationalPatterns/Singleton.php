<?php

class Student
{
    public function __construct()
    {
        echo "\nStudent Constructor has been Called.";
    }

    public static function createObject()
    {
        static $student = null;
        if ($student == null) {
            $student = new Student();
        }
        return $student;
    }
}

$student1 = Student::createObject();
$student2 = Student::createObject();
$student3 = Student::createObject();
$student4 = Student::createObject();
$student5 = new Student();