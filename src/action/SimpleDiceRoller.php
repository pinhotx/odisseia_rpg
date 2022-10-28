<?php namespace action;
require_once("./AbstractDice.php");
class SimpleDiceRoller extends AbstractDice{
  
  function __roll($sides, $mod = 0, ){
    $this->setMinimumResult(1);
    $this->setAmountOfSides($sides);
    return parent::roll();
    
  }

  public function d100($quantity = 1, $mod = 0){    
    return $this->__roll(sides:100);
  }

  public function d30($quantity = 1, $mod = 0){    
    return $this->__roll(sides:30);
  }

  public function d20($quantity = 1, $mod = 0){
    return $this->__roll(sides:20);
  }

  public function d12($quantity = 1, $mod = 0){    
    return $this->__roll(sides:12);
  }

  public function d10($quantity = 1, $mod = 0){    
    return $this->__roll(sides:10);
  }

  public function d8($quantity = 1, $mod = 0){    
    return $this->__roll(sides:8);
  }

  public function d6($quantity = 1, $mod = 0){    
    return $this->__roll(sides:6);
  }

  public function d4($quantity = 1, $mod = 0){    
    return $this->__roll(sides:4);
  }

}

$roll = new SimpleDiceRoller();
echo $roll->d20();

?>