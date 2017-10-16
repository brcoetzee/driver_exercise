
<?php
/*
* The Driver Class
*/
class Driver extends Person
{
	protected $talking = 'Driver is talking while driving.';
	protected $sit = 'Driver Is sitting,lol sounds funny';
	public $driverName;
	
	private static $driverInstance;

    private function __construct($driverName) 
	{
	    $this->driverName = $driverName;
	}
	

    public static function getInstance()
    {
        if (!self::$driverInstance)
        {
            self::$driverInstance = new Driver("Lewis Hamilton");
        }

        return self::$driverInstance;;
    } 
	
	 
}

?>
