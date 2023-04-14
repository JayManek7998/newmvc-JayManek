<?php

class Block_Payment_Grid extends Block_Core_Grid
{

	function __construct()
	{
		parent::__construct();
		$this->setTitle('MANAGE PAYMENT METHOD');
	} 

	protected function _prepareColumns()
	{
		$this->addColumn('payment_method_id', [
			'title'=>'Payment Id'
		]);		
		$this->addColumn('name', [
			'title'=>'Name'
		]);		
		$this->addColumn('status', [
			'title'=>'Status'
		]);		
		$this->addColumn('created_at', [
			'title'=>'Created At'
		]);

		return parent::_prepareColumns();
	}


	protected function _prepareActions()
	{
		$this->addColumn('edit', [
			'title' => 'Edit',
			'method' => 'getEditUrl'
		]);		
		$this->addColumn('delete', [
			'title' => 'Delete',
			'method' => 'getDeleteUrl'
		]);	

		return parent::_prepareActions();	
	}


	protected function _prepareButtons()
	{
		$this->addButton('payment_method_id', [
			'title' => 'ADD PAYMENT',
			'url' => $this->getUrl('add')
		]);

		return parent::_prepareButtons();		
	}


	public function getPayments()
	{
		$query = "SELECT * FROM `payment`";
		$payments = Ccc::getModel('Payment')->fetchAll($query);
		return $payments->getData();
	}
}
?>