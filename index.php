<?php
//*************************************************************
//** This PHP API is created by Janet Martin - 10-09-16      **
//** This is a HTTP API that returns the 3 most current      ** 
//** tweets from twitter extracting data from a json. It is  **
//** suppost to be done in OOP code - but I was having       **
//** difficulty in making it work - so I read the json usin  **
//** an associate array                                      **
//*************************************************************                                 ** 
 
//Get the string from the URL
$json = file_get_contents('http://rest.wildstar-online.com/api/devtracker/en');

// Decode the JSON string into an object
$obj = json_decode($json, true);

// set up count for loop - display only 3 tweets

   $count= 0;
   
//foreach loop to display the 3 most recent tweets in the JSON
   foreach($obj as $row)
 {    
            
           echo '<br>';
	       $timestamp=$row["timestamp"];
		   if($timestamp > 0)
		   {	
	            echo "Date==>" . gmdate("Y-m-d\TH:i:s\Z", $timestamp);
                echo '<br>';
			    echo  '<strong>Timestamp==> </strong>' . $row["timestamp"];
			    echo '<br>';
		        echo  '<strong>Author==> </strong>' .$row["link_author"];
		        echo '<br>';
    	        echo  '<strong>Title==> </strong>' .$row["link_title"];
		        echo '<br>';
		        echo '<strong>Body==></strong>' .$row["body"];
		        echo '<br>';
			    $count = $count + 1;
		   } else {
			    $count= $count + 1;		
		   }  
			  	  
			If($count > 3 ) {		
				break;		  			  
			}
 }


?>