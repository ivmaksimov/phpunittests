<?php
namespace TDD\Test;
// declare(strict_types=1);
use PHPUnit\Framework\TestCase; // imports PHPUnit core class called TestCase
use TDD\SrcFile; // imports SrcFile class
// Create Test Class

/*
* @covers  TDD\SrcFile
*/
class FileTest extends  TestCase {

  public function  testSum() {

      $obj = new SrcFile(); // dummy object for testing
      $input = [ 0, 2, 10, 5, 8]; // put the inputs in its own array
      $output = $obj->sum($input); // store the sum of the array within a $output variable
       $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
           25, // 1st param is the expected value
          $output, // 2nd param is the $output variable
          'When summing the total should equal 15' // 3rd param is a message displayed in case of failure
      );
  }


public function testAgeCalc() {
  $obj = new SrcFile();
  $output = $obj->ageCalc(2022, 1987);
  $this -> assertEquals(35, $output, 'Wrong age calculated, expected: 34');
}

public function testAverage() {
  $obj = new SrcFile();
  $output = $obj->average([1,2,3,4,5]);
  $this -> assertEquals(3, $output, 'The result should be 3');
}

public function testAddFive() {
  $obj = new SrcFile();
  $output = $obj->addFive(25);
  $this -> assertEquals(30, $output, 'The result should be 30');
}

}