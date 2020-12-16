<?php

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase {
   /**
    * Test the function called add from functions.php
    * We are checking if we are getting the correct results from add function in functions.php
    * We are requiring the functions.php file inside this method and then run Assert Equals
    * and using the add function.
    * We are making multiple assertions in one test
    * Please Notice, this is a unit test, dont mix between assertions types
    * if you test specific function / method or what ever, please make it consistent and
    * more important, with thinking and logic,
    * Thank you
    */
   public function testSumValuesAreCorrect() {
      require_once 'functions.php';
      $this->assertEquals(5, add(3, 2));
      $this->assertEquals(8, add(3, 5));
   }

   /**
    * As you see, we can write multiple tests in the same test class file.
    * So i will give you sum example for assertion to check we are not getting incorrect results
    * You can see i am not requiring the functions php file again.
    * He has loaded in the first test.
    */
   public function testAddFunctionWillNotReturnIncorrectSum() {
      $this->assertNotEquals(5, add(2, 2));
   }
}