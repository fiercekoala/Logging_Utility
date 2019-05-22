<?php
	class Utility_Logger
	{
	/**
     * 
     * Writes mixed var type to defined file or error_log directive. Returns true is write is successful and false if write fails. 
     *
     * @param   mixed   $message   Mixed type variable to be loaded into a file or system log
     * @param   string  $file 	   Name of the file to be written to. (Default Null)
     * @param   int 	$verbosity Log level [0 = LOG_EMERG,  1 = LOG_ALERT, 2 = LOG_CRIT, 3 = LOG_ERR, 4 = LOG_WARNING, 5 = LOG_NOTICE, 6 = LOG_INFO, 7 = LOG_DEBUG] (Default = 6)
     * @return  boolean
     */
	    public static function message_logger($message, $file = null, $verbosity = 6)
	    {
	    	if(!is_null($file)){
	    		return error_log('['.date("j-F-Y H:i:s e").'] Verbosity '.Utility_Logger::get_level($verbosity).': '.print_r($message, true)."\n", 3, $file);
	    	}else{
	    		return error_log('Verbosity '.Utility_Logger::get_level($verbosity).': '.print_r($message, true),0);
	    		// return syslog(Utility_Logger::get_level($verbosity), print_r($message, true));
	    	}
	    }

	    private static function get_level($level){
	    	switch ($level) {
	    		case 0:
	    			return "LOG_EMERG";
	    			break;

	    		case 1:
	    			return "LOG_ALERT";
	    			break;

	    		case 2:
	    			return "LOG_CRIT";
	    			break;

	    		case 3:
	    			return "LOG_ERR";
	    			break;
	    		
	    		case 4:
	    			return "LOG_WARNING";
	    			break;

	    		case 5:
	    			return "LOG_NOTICE";
	    			break;

	    		case 6:
	    			return "LOG_INFO";
	    			break;

	    		case 7:
	    			return "LOG_DEBUG";
	    			break;
	    		
	    		default:
	    			return "LOG_INFO";
	    			break;
	    	}
	    }

	}
?>