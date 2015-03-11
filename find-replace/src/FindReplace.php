<?php

    class FindReplace
    {

        function find_replace($input_string, $find_input, $replace_input) {

            if ($input_string == $find_input) {
                return $replace_input;
            } elseif ($input_string != $find_input) {
                return $input_string; }
            else {
                return 'false';
            }


    }


    }
?>
