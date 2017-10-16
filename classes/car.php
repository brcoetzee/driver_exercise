<?php
class car extends Vehicle implements IDriverCapability
{   

	private $typeOfTheCar;
	protected $powerOfMotor;
	private $manufacturer;
	private $amountOfSeats;
	private $typeOfFuel;
	private $colorOfTheCar;

   

   public function driverGetsIn() 
   {
      $getIn = ' gets In.';
      return $getIn;
   
   }
   public function startsCar()
   {
      $startIt = ' Starts.';
      return $startIt;
   }
   public function driverStops()
   {
      $justStop = ' Stops.';
      return $justStop;
   }
   public function driverGetOut()
   {
      $getOut = ' Get Out.';
      return $getOut;
   }
   public function driverAccelerate()
   {
      $accell = ' Accelerate.';
      return $accell;
   }
   public function pitStops()
   {
      $accell = ' PITSTOPS';
      return $accell;
   }
   

}	

?>

