<?php
    
    	/*
		Plugin Name:  PromoCode 
		Version: 1.0
	*/


	add_shortcode('promo', 'shortcode');	

	function shortcode()	
	{
	    $postedDate= strtotime(get_the_date()); 
        
	    $present= time(); 
	    $timeinterval = $present - $postedDate;
	   
	    if($timeinterval > 3600) { 
	        return 'Sorry time\'s up';
	    } else {
	        return 'MX50'; 
	    }
	}
?>
