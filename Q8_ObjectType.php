<?php
	class greeting
	{
		public $str = "Hello ";

		function show_greeting()
        	{
            		return $this->str;
        	}	
	}

	$message = new greeting;
    	var_dump($message);
	echo "<br><br>". $message->show_greeting(). " Aakriti Gupta!<br>";
	echo "<br>This code is executed by Aakriti Gupta!";
?>