<?php

class person {
    protected $firstName, $lastName, $id;
    
    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }
    
    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}
class Student extends person {
    private $testScores;
  
    /*	
    *   Class Constructor
    *   
    *   Parameters:
    *   firstName - A string denoting the Person's first name.
    *   lastName - A string denoting the Person's last name.
    *   id - An integer denoting the Person's ID number.
    *   scores - An array of integers denoting the Person's test scores.
    */
    // Write your constructor here
    public function __construct($firstname, $lastname, $id, $scores){
        $this->firstName = $firstname;
        $this->lastName = $lastname;
        $this->id = $id;
        $this->scores = $scores;
    }
    public function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
    /*	
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    // Write your function here
    public function calculate(){
        $average = array_sum($this->scores) / count($this->scores) ;
        switch ($average) {
            case $average < 40 && $average > 0:
                return 'T';
            case $average < 55 && $average >= 40:
                return 'D';
            case $average < 70 && $average >= 55:
                return 'P';
            case $average < 80 && $average >= 70:
                return 'A';
            case $average < 90 && $average >= 80:
                return 'E';
            case $average <= 100 && $average >= 90:
                return 'O';
            default:
                break;
        }
    }
}


$file = fopen("php://stdin", "r");

$name_id = explode(' ', fgets($file));

$first_name = $name_id[0];
$last_name = $name_id[1];
$id = (int)$name_id[2];

fgets($file);

$scores = array_map(intval, explode(' ', fgets($file)));

$student = new Student($first_name, $last_name, $id, $scores);

$student->printPerson();

print("Grade: {$student->calculate()}");

?>
