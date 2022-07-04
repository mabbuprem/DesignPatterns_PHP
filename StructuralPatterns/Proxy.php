<?php

interface IUniversity{
    function getUniversity();
}

class University implements IUniversity
{
    private $universityName;
    public function __construct($universityName)
    {
        $this->universityName = $universityName;
    }
    public function getUniversity()
    {
        echo "Your University Name is:: ".$this->universityName;
    }
}
class UniversityProxy implements IUniversity
{
    private $universityName;
    private $university;
    public function __construct($universityName)
    {
        $this->universityName = $universityName;
    }
    public function getUniversity()
    {
        if($this->university==null)
        {
            $this->university = new University($this->universityName);
        }
        $this->university->getUniversity();
    }
}
$universityProxy = new UniversityProxy("JNTUK");
$universityProxy->getUniversity();