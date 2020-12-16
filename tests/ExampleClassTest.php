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

   /**
    * In this test we are checking that it reterns
    */
   public function testValuesAreEmptyByDefault() {
      $finalResults = new ExampleClass();
      $this->assertEquals('', $finalResults->getTwoValues());
   }

   /**
    * Run this test to see what will happened if you are not prefixing the method name with test
    */
   public function valuesAreEmptyByDefault() {
      $finalResults = new ExampleClass();
      $this->assertEquals('', $finalResults->getTwoValues());
   }


   /*
    * If you want to run a test without a "test" prefix you can use the next syntax:
    * words separated by underscores and a phpDoc saying its a test
    */

   /**
    * @test
    */
   public function values_are_empty_by_default() {
      $finalResults = new ExampleClass();
      $this->assertEquals('', $finalResults->getTwoValues());
   }
}