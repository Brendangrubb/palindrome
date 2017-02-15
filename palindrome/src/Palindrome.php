<?php
    class Palindrome
    {
        function stringReverse($input_string)
        {
            $split_input = str_split($input_string);
            $split_input_length = count($split_input) - 1;
            $reverse_input = array();
            while ($split_input_length >= 0)
            {
                array_push($reverse_input, $split_input[$split_input_length]);
                --$split_input_length;
            }
            $output_string = implode("", $reverse_input);
            return $output_string;
        }

        function palindromeTester($input_string)
        {
            $reversed_string = Palindrome::stringReverse($input_string);
            $regex_input_string = '//i';
            $regex_reversed_string = '//i';
            preg_match_all($regex_input_string, $input_string, $new_input_string);
            preg_match_all($regex_reversed_string, $reversed_string, $new_reversed_string);
            // echo $new_input_string;
            // echo $new_reversed_string;
            return ($new_input_string == $new_reversed_string);

        }
    }

?>
