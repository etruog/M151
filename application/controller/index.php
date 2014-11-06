<?php
class controller
{
	private $model;
	private $view;
	
	public function __construct()
	{
		$this->model = new model();
		$this->view = new view(); 
	}
	
	public function display()
	{	
		$data = $this->model->getData();
		$html = $this->view->gethtml($data); 
        return $html; 
	}
	
	
}

?>