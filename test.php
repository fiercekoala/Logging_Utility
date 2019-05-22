
<?php

require("utility.php");

$test_string = "This is my test string";
$test_array = array("Volvo", "BMW", "Toyota");
$test_array2['name'] = 'UltraCorp';
$test_array2['product'] = 'Cars';
$test_object = (object) [
    "test_string" => "Test String",
    "test_function" => function($test) {
        return $test . " bar";
    }
];

$run_array = array($test_string, $test_array, $test_array2, $test_object);
foreach ($run_array as $test_run) {
	Utility_Logger::message_logger($test_run);
	Utility_Logger::message_logger($test_run, null, 7);
	Utility_Logger::message_logger($test_run, "test.txt");
	Utility_Logger::message_logger($test_run, "test.txt", 4);
}
echo ("Test Complete ".date("j-F-Y H:i:s e"));


?>