<?php

declare(strict_types=1);

namespace Delhombre\FizzBuzz;

final class FizzBuzz
{
  public function generate(int $min, int $max): string
  {
    $returned = "";

    while ($min <= $max) {
      $returned .= $this->evaluateNumber($min++);
    }

    return $returned;
  }

  private function evaluateNumber(int $number): string
  {
    if ($number % 15 === 0)
      return "FizzBuzz";
    if ($number % 5 === 0)
      return "Buzz";
    elseif ($number % 3 === 0)
      return "Fizz";
    return (string) $number;
  }
}
