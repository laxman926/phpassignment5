 <!-- laxman kumar 8622368 -->
 <?php

		// Plugin Name:FactOfTheDay 
		// Version: 1.0
	
function fact_of_the_day(){

    // create a new cURl resultources
    $ch = curl_init();
    
// From URL to get webpage contents.
    // $url="https://history.muffinlabs.com/date";
    $url = "https://www.geeksforgeeks.org/";

 // Return Page contents. 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch,CURLOPT_URL,  $url);
  



    $result = curl_exec($ch);

    $result = json_decode($result, true);

    // get a random number with rand function
    $ranNum = rand(1,20);

    // display the factoftheday
    echo 'Date --> '. $result["date"].' Fact --> '.$result["data"]["Events"][$ranNum]["text"];

}

add_action('wp_footer', 'fact_of_the_day');
?>