<?php

    require_once "src/FindReplace.php";

    class FindReplaceTest extends PHPUnit_Framework_TestCase
    {

        // TEST 0: Super-Baby
        function test_0() {
            // ARRANGE
            $test_FindReplace = new FindReplace;
            $input_string = "a";
            $find_input = "a";
            $replace_input = "a";

            //ACT
            $result = $test_FindReplace->find_replace($input_string, $find_input, $replace_input);

            //ASSERT
            $this->assertEquals("a", $result);
        }

        // TEST 1: Super-Baby
        function test_1() {
            // ARRANGE
            $test_FindReplace = new FindReplace;
            $input_string = "a";
            $find_input = "a";
            $replace_input = "b";

            //ACT
            $result = $test_FindReplace->find_replace($input_string, $find_input, $replace_input);

            //ASSERT
            $this->assertEquals("b", $result);
        }

        // TEST 2: Super-Baby
        function test_2() {
            // ARRANGE
            $test_FindReplace = new FindReplace;
            $input_string = "a";
            $find_input = "b";
            $replace_input = "c";

            //ACT
            $result = $test_FindReplace->find_replace($input_string, $find_input, $replace_input);

            //ASSERT
            $this->assertEquals("a", $result);
        }



    }

?>
