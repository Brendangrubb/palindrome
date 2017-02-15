<?php
    class Palindrome
    {
        function palindromeTester($input_string)
        {
            $split_input = str_split($input_string);
            $split_input_length = count($split_input) - 1;
            $reverse_input = array();
            while ($split_input_length >= 0)
            {
                echo "counter: ".$split_input_length.".  ";
                array_push($reverse_input, $split_input[$split_input_length]);
                var_dump($reverse_input);
                --$split_input_length;
            }
            $output_string = implode("", $reverse_input);
            return $output_string;
        }
    }

?>
