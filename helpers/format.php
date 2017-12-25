<?php 


class Dateformet
    {
	
	public function formetdate($date){
		return date('F j,Y,g:i a',strtotime($date));
	}

	//excerp post text

	public function Excerttext($text, $limit=300){
		$text=$text." ";
		$text=substr($text, 0,$limit);
		$text=substr($text, 0,strrpos($text,' '));
		$text=$text." ....";
		return $text;
	}

}
?>