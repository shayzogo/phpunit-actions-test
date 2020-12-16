<?php
/**
 * This is an example for basic unit test with PHPUnit
 * Please follow it for all over the test files
 */

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {
   /**
    * To write a test you must write it in a public function starting with the word `test`.
    * The name of tests must be descriptive dont matter how long it will be
    * In this example i am computing the sum of 1+1
    */
   public function testComputeOnePlusOne() {
      $this->assertEquals(2, 1 + 1);
   }
}