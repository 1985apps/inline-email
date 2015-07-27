<?php
	
namespace InlineEmail;

class InlineEmail {

	public $style_path;
	public $style = [];

	function __construct($style_path){
		$this->style_path = $style_path;
		$this->style = include $style_path;
	}

	public function get($name){
		if(isset($this->style[$name]))
			return $this->style[$name];
		return "";
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
