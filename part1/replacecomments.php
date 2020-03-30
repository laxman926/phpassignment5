<!--  laxman kumar 8622368 -->
<?php
	/*
		Plugin Name:  ReplaceString 
		Version: 1.0
	*/
		function stringreplace ($str) {
			$words = array(
				'notgood' => '<p>Awesome article</p>', 
				'script' => '<p>No spamming please</p>', 
				'hi' => '<p> How are you? </p>'
			);

            $str = str_replace(array_keys($words), $words, $str); 
            
			return $str; // returns the value
		}

		add_filter ('pre_comment_content', 'stringreplace'); 
?>