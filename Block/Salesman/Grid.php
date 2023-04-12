<?php

class Block_Salesman_Grid extends Block_Core_Template
{
	function __construct()
	{
		parent::__construct();
		$this->setTemplate('salesman/grid.phtml');
	}

	public function getSalesmans()
	{
		$query = "SELECT * FROM `salesman` ORDER BY `name` DESC;";
		$salesmans = Ccc::getModel('Salesman')->fetchAll($query);
		return $salesmans->getData();
	}
}
?>