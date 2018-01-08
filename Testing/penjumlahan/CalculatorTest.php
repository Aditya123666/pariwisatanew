<?php
	class CalculatorTest extends \PHPUnit_Framework_TestCase{

		public function can_set_single_operation(){
			$addition = new \App\Calculator\addition;
			$addition->setOperands([5,10]);

			$Calculator = new \App\Calculator\Calculator;
			$calculator->setOperation($addition);

			$this->assertCount(1,$calculator->getOperations());
		}
		public function can_set_Multiple_operations(){
			$addition1= new \Testing\penjumlahan\Addition;
			$addition1->setOperands([5,10]);
			
			$addition2= new \Testing\penjumlahan\Addition;
			$addition2->setOperands([2,2]);

			$calculator = new \Testing\penjumlahan\Calculator;
			$calculator->setOperations([$addition1,$addition2]);
		}
	}
