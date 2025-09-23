<?php

class worker {
    private string $name;
    private int $salary;

    public function setWorkersInfo($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function printTaxInfo() {
        echo "Worker: " . $this->name . "\n";
        if ($this->salary > 6000) {
            echo "This worker must pay taxes.\n";
        } else {
            echo "This worker doen't have to pay taxes.\n";
        }
    }
}

$worker1 = new worker();
$worker1->setWorkersInfo("Camila", 7000);
$worker1->printTaxInfo();

$worker2 = new worker();
$worker2->setWorkersInfo("Amir", 3000);
$worker2->printTaxInfo();