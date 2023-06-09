<?php
class Block_Core_Template extends Model_Core_View
{
	protected $children =  [];
	protected $layout = null;

	function __construct()
	{
		parent::__construct();
		
	}

	public function setLayout($layout)
	{
		$this->layout = $layout;
		return $this;
	}

	public function getLayout()
	{
		if ($this->layout) {
			return $this->layout;
		}

		$layout = new Block_Core_layout();
		$this->setLayout($layout);
		return $layout;
	}

	public function setChildren(array $children)
	{
		$this->children = $children;
		return $this;
	}

	public function getChildren()
	{
		return $this->children;
	}

	public function addChild($key, $value)
	{
		$this->children[$key] = $value;
		return $this;
	}

	public function removeChild($key)
	{
		if (array_key_exists($key, $this->children)) {
			unset($this->children[$key]);
		}

		return $this;
	}

	public function getChild($key)
	{
		if (array_key_exists($key, $this->children)) {
			return $this->children[$key];
		}

		return null;
	}
}
?>