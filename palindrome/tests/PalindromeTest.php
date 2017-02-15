<?php
    require_once __DIR__.'/../src/Palindrome.php';

    class PalindromeTest extends PHPUnit_Framework_TestCase
    {

        function test_palindromeTester_reverseString()
        {
            $test_newPalindrome = new Palindrome;
            $input = "cake";

            $result = $test_newPalindrome->palindromeTester($input);

            $this->assertEquals("ekac", $result);

        }





    }
?>
