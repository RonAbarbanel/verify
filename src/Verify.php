<?php namespace RonAbarbanel\Verify;

use Exception;

/**
 * Verify class
 *
 */

class Verify {
  // Rules for verification
  protected $requirements;

  public function __construct(){
    $this->requirements = array();
  }

  public function setRequirements($requirements){
    $this->requirements = $requirements;
  }
  
}
