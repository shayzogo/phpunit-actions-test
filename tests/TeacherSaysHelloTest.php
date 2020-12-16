<?php

use PHPUnit\Framework\TestCase;

class TeacherSaysHelloTest extends TestCase {
   public function testTeacherSaysHello() {
      $teacher = new App\Teacher();
      $this->assertEquals('Hello', $teacher->sayHello());
   }
}