<?php
class Employee {
    private string $name;
    private int $salary;

    public function setEmployeeInfo($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function printTaxInfo() {
        echo "Employee: " . $this->name . "\n";
        if($this->salary > 6000) {
            echo "This employee must pay taxes.\n";
        } else {
            echo "This employee doesn't need to pay taxes.\n";
        }
    }
}

$employee1 = new Employee();
$employee1->setEmployeeInfo("Camila", 8000);
$employee1->printTaxInfo();

$employee2 = new Employee();
$employee2->setEmployeeInfo("Amir", 5000);
$employee2->printTaxInfo();