<?php
namespace riotDecode\txt;

use riotDecode\common\BaseFile;
class TxtFile extends BaseFile {
	public function __construct($file) {
		parent::__construct($file);
		$this->indexable = true;
	}
	
	public function &getValues($translateKeys = true) {
		if ($this->values == null)
		{
			$this->values["content"]["txt"] = str_replace("\r\n", "<br>", $this->loadFileContent());
			ksort($this->values);
		}
		return $this->values;
	}
	
	public function showValue($value)
	{
		return json_encode($value);
	}

}
?>