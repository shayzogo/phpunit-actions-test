<?php

use PHPUnit\Framework\TestCase;

class ExampleClassTest extends TestCase {
   public function testReturnCorrectGetTwoValues() {
      require_once './Classes/ExampleClass.php';
      $finalResults = new ExampleClass();
      $finalResults->valueOne = 'Hello ';
      $finalResults->valueTwo = 'World';
      $this->assertEquals('Hello World', $finalResults->getTwoValues());
   }


   public function testValuesAreEmptyByDefault() {
      $finalResults = new ExampleClass();
      $this->assertEquals('', $finalResults->getTwoValues());
   }
}