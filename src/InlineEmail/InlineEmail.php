<?php
	
namespace InlineEmail;

class InlineEmail {

	public $style_path;
	public $style = [];

	/**
	* Accepts a path for the style.php configuration.
	*
	* @param  string $style_path Path of the style.php file
	* @return void
	*/

	function __construct($style_path = null){
		$this->style_path = $style_path;
		$this->style = include __DIR__ . "/default.style.php";
		
		if($this->style_path) {
			$user_style = include $this->style_path;		
			$this->style = array_merge($this->style, $user_style);	
		}

	}


	/**
	* Returns the value of a class else returns the string parameter itself.
	*
	* @param  string $name Name of the class
	* @return void
	*/
	public function get($name){
		if(isset($this->style[$name]))
			return $this->style[$name];
		return $name;
	}

	/**
	* Renders the style tag along with the inline css determined by the "names" passed.
	*
	* @param  array $names      Arrays of names
	* @return void
	*/
	public function style($names = []){
		$values = [];
		foreach($names as $name)
			$values[] = $this->get($name);

		echo "style=\"". join("; ", $values) ."\"";
	}

}
