<?php

/*
*Base class for Driver and Passenger
*/
class Person
{
	protected $walking;
	protected $talking;
	protected $sit;
	protected $eating;
	protected $sleeping;
	
	

	/*
	* just some random access methods to return the various
	* different properties
	*/
	function getWalking()
	{
		return $this->walking;
	}

	function getTalking()
	{
		return $this->talking;
	}
	function getSit()
	{
		return $this->sit;
	}
	
	function getEat()
	{
		return $this->eating;
	}
	
	function getSleep()
	{
		return $this->sleeping;
	}
}

?>