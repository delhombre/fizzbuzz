<?php

declare(strict_types=1);

namespace Delhombre\FizzBuzz\Tests;

use Delhombre\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
  private FizzBuzz $fizzBuzz;

  protected function setUp(): void
  {
    $this->fizzBuzz = new FizzBuzz();
  }

  public function testShouldReturn1IfNumberIs1()
  {
    $this->assertEquals("1", $this->fizzBuzz->generate(1, 1));
  }

  public function testShouldReturn2IfNumberIs2()
  {
    $this->assertEquals("2", $this->fizzBuzz->generate(2, 2));
  }

  public function testShouldReturnFizzIfNumberIs3()
  {
    $this->assertEquals("Fizz", $this->fizzBuzz->generate(3, 3));
  }

  public function testShouldReturnFizzIfNumberIs6()
  {
    $this->assertEquals("Fizz", $this->fizzBuzz->generate(6, 6));
  }

  public function testShouldReturnBuzzIfNumberIs5()
  {
    $this->assertEquals("Buzz", $this->fizzBuzz->generate(5, 5));
  }

  public function testShouldReturnBuzzIfNumberIs10()
  {
    $this->assertEquals("Buzz", $this->fizzBuzz->generate(10, 10));
  }

  public function testShouldReturnFizzBuzzIfNumberIs15()
  {
    $this->assertEquals("FizzBuzz", $this->fizzBuzz->generate(15, 15));
  }

  public function testShouldReturnFizzBuzzIfNumberIs30()
  {
    $this->assertEquals("FizzBuzz", $this->fizzBuzz->generate(30, 30));
  }

  public function testShouldReturn12IfNumberIs1To2()
  {
    $this->assertEquals("12", $this->fizzBuzz->generate(1, 2));
  }

  public function testShouldReturn12FizzIfNumberIs1To3()
  {
    $this->assertEquals("12Fizz", $this->fizzBuzz->generate(1, 3));
  }

  public function testShouldReturn12Fizz4BuzzIfNumberIs1To5()
  {
    $this->assertEquals("12Fizz4Buzz", $this->fizzBuzz->generate(1, 5));
  }

  public function testShouldReturn12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzzIfNumberIs1To5()
  {
    $this->assertEquals("12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz", $this->fizzBuzz->generate(1, 15));
  }
}
