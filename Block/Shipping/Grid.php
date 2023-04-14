<?php
class Block_Shipping_Grid extends Block_Core_Template
{
	function __construct()
	{
		parent::__construct();
		$this->setTemplate('shipping/grid.phtml');
	}

	public function getShippings()
	{
		$query = "SELECT * FROM `shipping_method`";
		$shippings =  Ccc::getModel('Shipping')->fetchAll($query);
		return $shippings->getData();
	}
}
?>