<?php

    class FindReplace
    {

        function find_replace($input_string, $find_input, $replace_input) {

            $lc_string = strtolower($input_string);
            $lc_find = strtolower($find_input);
            $lc_replace = strtolower($replace_input);

            $exploded_string = explode(" ", $lc_string);

            $result_string = array();

            // $split_find = str_split($lc_find);

            foreach ($exploded_string as $word) {

                $replace_word = str_replace($lc_find, $lc_replace, $word);
                array_push($result_string, $replace_word . " ");
                // $split_word = str_split($word);

                // if ($split_word == $split_find) {
                //     if (compare next letter)
                //     array_push($result_string, $lc_replace . " ");
                //     // return $replace_input; }
                //  else {
                //     array_push($result_string, $word . " ");
                //     // return $word;

            }

            $re_string = implode($result_string);
            $trim_re_string = trim($re_string);
            return ucfirst($trim_re_string);

            // if ($input_string == $find_input) {
            //     return $replace_input;
            // } elseif ($input_string != $find_input) {
            //     return $input_string; }
            // else {
            //     return 'false';
            // }


    }


    }
?>
