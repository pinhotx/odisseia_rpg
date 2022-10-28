<?php namespace action;

   class AbstractDice{
    protected $amountOfSides;
    protected $minimumResult;
    protected $actualValue;

    public function __construct(
      int $amountOfSides = 20,
      int $minimumResult = 1,
    ){
      $this->amountOfSides = $amountOfSides;
      $this->minimumResult = $minimumResult;
    }

    public function setAmountOfSides(int $amount){
      $this->amountOfSides = $amount;
    }

    public function getAmountOfSides(){
      return $this->amountOfSides;
    }

    private function setActualValue($value){
      $this->actualValue = $value;
    }
    public function getActualValue(){
      return $this->actualValue;
    }

    protected function setMinimumResult($minimumResult){
      $this->minimumResult = $minimumResult;
    }
    public function getMinimumResult(){
      return $this->minimumResult;
    }

    public function roll(){
      if(empty ($this->getMinimumResult)){
        $this->setMinimumResult(1);
      };
      $roll = rand($this->minimumResult, $this->amountOfSides);
      $this->setActualValue($roll);
      return $this->getActualValue();
    }
    
  }
/*
  $d10 = new AbstractDice(amountOfSides:10);
  var_dump($d10->roll());*/



?>