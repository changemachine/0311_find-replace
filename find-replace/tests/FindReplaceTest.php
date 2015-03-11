<?php

    require_once "src/FindReplace.php";

    class FindReplaceTest extends PHPUnit_Framework_TestCase
    {

/*        // TEST 0: Super-Baby
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

*/        // TEST 3: Single Word String

        function test_3() {
            // ARRANGE
            $test_FindReplace = new FindReplace;
            $input_string = "Dog";
            $find_input = "Dog";
            $replace_input = "Cat";

            //ACT
            $result = $test_FindReplace->find_replace($input_string, $find_input, $replace_input);

            //ASSERT
            $this->assertEquals("Cat", $result);
        }

        // TEST 4: Multiple Word String
        function test_4() {
            // ARRANGE
            $test_FindReplace = new FindReplace;
            $input_string = "My dog has fleas";
            $find_input = "Dog";
            $replace_input = "Cat";

            //ACT
            $result = $test_FindReplace->find_replace($input_string, $find_input, $replace_input);

            //ASSERT
            $this->assertEquals("My cat has fleas", $result);
        }

        // TEST 5: Multiple Word String Odd
        function test_5() {
            // ARRANGE
            $test_FindReplace = new FindReplace;
            $input_string = "mY dOg has Fleas";
            $find_input = "DOg";
            $replace_input = "CaT";

            //ACT
            $result = $test_FindReplace->find_replace($input_string, $find_input, $replace_input);

            //ASSERT
            $this->assertEquals("My cat has fleas", $result);
        }
        // TEST 6: Word Within Word
        function test_6() {
            // ARRANGE
            $test_FindReplace = new FindReplace;
            $input_string = "The cat was in the cathedral";
            $find_input = "cat";
            $replace_input = "dog";

            //ACT
            $result = $test_FindReplace->find_replace($input_string, $find_input, $replace_input);

            //ASSERT
            $this->assertEquals("The dog was in the doghedral", $result);
        }

    }

?>
