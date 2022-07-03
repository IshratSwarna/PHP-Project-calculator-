<?php

class Calculator{
    public $number1;
    public $number2;
    public $opeartor;

    public function setCalculator($number1, $number2, $operator){
        $this->number1 = $number1;
        $this->number2 = $number2;
        $this->operator = $operator;
    }

    public function calculate(){
        $result = '';
        switch ($this->operator) {
            case 'add':
                $result = $this->number1 + $this->number2;
                break;
            case 'sub':
                $result = $this->number1 - $this->number2;
                break;
            case 'mul':
                $result = $this->number1 * $this->number2;
                break;
            case 'div':
                $result = $this->number1 / $this->number2;
                break;
        }
        return $result;
    }
}

?>