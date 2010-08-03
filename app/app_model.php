<?php
class AppModel extends Model 
{
        public $recursive = -1;
	public function __construct($id = false, $table = null, $ds = null) 
	{
		if ( !isset($_SERVER['HTTP_HOST']) || preg_match('/^(localhost)?$/', $_SERVER['HTTP_HOST']) )
			$this->useDbConfig = 'developer';
			
		parent::__construct($id, $table, $ds);
	}
}
?>