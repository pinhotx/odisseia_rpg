<?php namespace action;
require_once("./AbstractDice.php");
class SimpleDiceRoller extends AbstractDice{
  
//A Simple Roll Dice Function returnin a formated array
  function __roll($quantity = 1, $faces, $mod = 0, ):array{
    $this->setLowestFace(1);
    $this->setAmountOfFaces($faces);
    $result = [];
    for($i = 0 ; $i< $quantity; $i++){
      array_push($result, parent::roll());
    }
    
    return ["allFacesUp"=>$result,"mod"=>$mod, "finalResult"=>array_sum($result)+$mod];
    
  }
//Dice Rollers for different Faces
  public function d100($quantity = 1, $mod = 0){    
    return $this->__roll($quantity, faces:100, mod:$mod);
  }

  public function d30($quantity = 1, $mod = 0){    
    return $this->__roll($quantity, faces:30, mod:$mod);
  }

  public function d20($quantity = 1, $mod = 0){
    return $this->__roll(quantity:$quantity, faces:20, mod:$mod);
  }

  public function d12($quantity = 1, $mod = 0){    
    
    return $this->__roll($quantity, faces:12, mod:$mod);
  }

  public function d10($quantity = 1, $mod = 0){    
    return $this->__roll($quantity, faces:10, mod:$mod);
  }

  public function d8($quantity = 1, $mod = 0){    
    return $this->__roll($quantity, faces:8, mod:$mod);
  }

  public function d6($quantity = 1, $mod = 0){    
    return $this->__roll($quantity, faces:6, mod:$mod);
  }

  public function d4($quantity = 1, $mod = 0){    
    return $this->__roll($quantity, faces:4, mod:$mod);
  }

}
//TEST
  $roll = new SimpleDiceRoller();
  //var_dump($roll->d20(mod:5));
  echo "<pre>".json_encode($roll->d20(quantity:2  ))."</pre>";

?>