<?php
class AppController extends Controller 
{
	public $helpers = array('Html', 'Form', 'Javascript', 'Text', 'Session', 'Image');
	public $components = array('Auth', 'RequestHandler');
	
	public function beforeRender() 
	{
		$this->layout = "admin";
	}
	
}
?>