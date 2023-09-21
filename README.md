# FizzBuzz TDD Exercise

This program is a Test-Driven Development (TDD) exercise based on the YouTube video by @mica16 (Michael Azerhad) on TDD. The repository is built using PHP 8.2.10.

## Program Details

Write a program that returns integers from 1 to 100. Consider the following rules:

- For multiples of 3, replace the number with "Fizz."
- For multiples of 5, replace the number with "Buzz."
- For numbers that are multiples of both 3 and 5, replace the number with "FizzBuzz."

### Example Output

The program's output should look like this: "12Fizz4Buzz78FizzBuzz...Buzz."

## Repository Details

This README file provides an overview of the FizzBuzz TDD exercise. Below are some additional details for those who will be using or reviewing this repository.

### Installation

To use this program, follow these steps:

1. Clone the repository to your local machine.

   ```shell
   git clone https://github.com/delhombre/fizzbuzz.git
   ```
2. Change into the project directory:

```shell
   cd fizzbuzz
   ```
3. Install dependencies

```shell
   make install
   ```
4. Run tests
```shell
   make tests
   ```

### Usage
You can run the FizzBuzz program by instantiate the FizzBuzz class in any PHP file and use the generate method which take two parameters (min and max number);

```php
// my-file.php

$fizzBuzz = new FizzBuzz();
echo $fizzBuzz->generate(1, 100);
```

Run it in the shell:
```shell
   php my-file.php
   ```

## Contribution

If you'd like to contribute to this repository, please follow these guidelines:

1. Fork the repository on GitHub by clicking the "Fork" button in the top-right corner of the repository page.

2. Clone your forked repository to your local machine:

```shell
git clone https://github.com/your-username/fizzbuzz.git
   ```
3. Create a new branch for your feature or bugfix:

```shell
   git checkout -b feature-name
   ```
4. Make your changes, add, commit, and push:

```shell
   git add .
   git commit -m "Add feature or fix bug"
   git push origin feature-name
   ```
5. Create a pull request from your forked repository on GitHub. Be sure to provide clear details about your changes.

## Acknowledgments
Special thanks to @mica16 for the TDD inspiration and the YouTube video that served as a reference for this exercise.