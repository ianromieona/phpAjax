<?php 

	if($_POST){
		extract($_POST);

		/*    
			Code here


		*/
		echo "POST METHOD\n";
		echo "Name: ".$name."\n";
		echo "Age: ".$age."\n";
		echo "Gender: ".$gender."\n";
	}
	if($_GET){
		extract($_GET);

		/*    
			Code here


		*/
		echo "GET METHOD\n";

		echo "Name: ".$name."\n";
		echo "Age: ".$age."\n";
		echo "Gender: ".$gender."\n";
	}
?>