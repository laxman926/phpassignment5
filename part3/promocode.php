<?php
    
    	/*
		Plugin Name:  PromoCode 
		Version: 1.0
	*/

// laxman kumar 8622368
	add_shortcode('promo', 'shortcode');	

	function shortcode()	
	{
	    $postedDate= strtotime(get_the_date()); 
        
	    $present= time(); 
	    $timeinterval = $present - $postedDate;
	   
	    if($timeinterval > 18000) { 
	        return 'Sorry time\'s up';
	    } else {
	        return 'MAX50'; 
	    }
	}
?>
