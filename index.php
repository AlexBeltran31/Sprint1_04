<?php
// ex 1
class Employee {
    private string $name;
    private int $salary;

    public function __construct(string $name, int $salary) {
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

$employee1 = new Employee("Camila", 8000);
$employee1->printTaxInfo();

$employee2 = new Employee("Amir", 5000);
$employee2->printTaxInfo();

// ex 2
class Shape {
    protected int $width;
    protected int $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
}

class Triangle extends Shape {
    public function getArea() {
        return ($this->width * $this->height) / 2;
    }
}

class Rectangle extends Shape {
    public function getArea() {
        return $this->width * $this->height;
    }
}

$triangle = new Triangle(10, 5);
echo "Triangle area: " . $triangle->getArea() . "\n";

$rectangle = new Rectangle(30, 15);
echo "Rectangle area: " . $rectangle->getArea() . "\n";