# Logging_Utility
Logging Utility Demo

Utility file (utility.php) containing class Utility_Logger with the function message_logger.
The assumption is your error_log directive is set to syslog otherwise messages without a file are written to where the directive is set. 

message_logger takes up to 3 parameters and returns a boolean
     -(mixed)   $message:   Mixed type variable to be loaded into a file or system log
     -(string)  $file: 	    Name of the file to be written to. If Null write to system log (Default Null)
     -(int) 	$verbosity: Log level [0 = LOG_EMERG,  1 = LOG_ALERT, 2 = LOG_CRIT, 3 = LOG_ERR, 4 = LOG_WARNING, 5 = LOG_NOTICE, 6 = LOG_INFO, 7 = LOG_DEBUG] (Default = 6)
     - @return  boolean

To use Include utility.php in file. 

Included test.php file for example, this will run test for both the current error_log directive and also write to a file "test.txt" in the current directory. 