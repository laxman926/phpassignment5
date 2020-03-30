<!--  laxman kumar 8622368 -->

<?php
	/*
		Plugin Name: CountWords
		Version: 1.0
	*/
    // Count number of words in the content
		function countWords ($content) {
			return $content . " (" . str_word_count($content) . " words in the Content.)"; 
		}

		// function calls to countwords.
		add_filter("the_content", "countWords");
?>