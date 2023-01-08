class Verify {
  // Rules for verification
  protected $requirements;

  function __construct(){
    $this->requirements = array();
  }

  public function setRequirements($requirements){
    $this->requirements = $requirements;
  }
}
