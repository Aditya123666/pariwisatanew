<?php

namespace Testing\penjumlahan;

class Calculator{
	protected $operations= [];

	public function setOperations(OperationsInterface $operation){
		$this->operations[] = $operation;
	}

	public function getOperation(){
		return $this->operations;
	}
}