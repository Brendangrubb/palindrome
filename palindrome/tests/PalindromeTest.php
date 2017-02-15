<?php
    require_once __DIR__.'/../src/Palindrome.php';

    class PalindromeTest extends PHPUnit_Framework_TestCase
    {

        function test_stringReverse_reverseString()
        {
            $test_newPalindrome = new Palindrome;
            $input = "cake";

            $result = $test_newPalindrome->stringReverse($input);

            $this->assertEquals("ekac", $result);

        }

        function test_palindromeTester_compare()
        {
            $test_newPalindrome = new Palindrome;
            $input = "Racecar";

            $result = $test_newPalindrome->palindromeTester($input);

            $this->assertEquals(true, $result);

        }





    }
?>
