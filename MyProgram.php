<?php

/*
* This is the factory. This is where the magic happens. 


/*Directories that contain classes and interfaces
*/

$classesDir = array (
    ROOT_DIR.'classses/',
    ROOT_DIR.'interfaces/',
    
);
function __autoload($class_name) {
    global $classesDir;
    foreach ($classesDir as $directory) {
        if (file_exists($directory . $class_name . '.php')) {
                require_once ($directory . $class_name . '.php');
                return;
        }
    }
}


/*
* will make each item according to its blue print. Provided they
* are part of the base class we can use them.
*/
class carFactory
{
	const FACTORY_BASE = 'Vehicle';

	public static function createCar($type)
	{
		$base_class = self::FACTORY_BASE; 

		/*
		* Checks for the type of vehicle.( And if it is a vehicle.)
		*/
		if (class_exists($type) && is_subclass_of($type, $base_class ))
		{
			return new $type;
			
		}
		else
		{
			throw new Exception("{$type} is not an instance of {$base_class}");
		}
	}
}

/*
* Creates the arguement if it is a Vehicle.
*/
$newCar = carFactory::createCar('car');

/*
* Get the driver,Singleton pattern on the Driver class,making sure there is one driver on the track.
*/
$racer = Driver::getInstance();
$hisName = $racer->driverName;
if($racer instanceof Driver)
{
    
	   ECHO $hisName.$newCar->driverGetsIn()."<br>";
	
	   ECHO $hisName.$newCar->startsCar()."<br>";
	   ECHO $hisName.$newCar->driverAccelerate()."<br>";
	   
	   for($laps=1;$laps<=3;$laps++)
	   {
           
		   if($laps==2)
		   {
		      ECHO $hisName.$newCar->pitStops()."<br>";
		      
		   }
           echo "There goes Lap" . $laps . "<br />";
       }
	   
	ECHO $hisName.$newCar->driverStops()."<br>";
	ECHO $hisName.$newCar->driverGetOut()."<br>";
	   
	   
	
}






?>