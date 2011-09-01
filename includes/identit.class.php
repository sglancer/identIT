<?php
/**
 *@package identIT!
 *@author Sourcegeek <tecnovirtu@gmail.com>
**/
class identIT {
	/**
	 *@var int
	**/
	private $result;
	
	/**
	 * Constructor
	 *
	 *@param string str
	 *@param bool ret
	**/
	public function _construct($str = null, $ret = true) {
		if ($str != null)
			$this->ident($str, $ret);
	}
	
	/**
	 * Public ident
	 *
	 *@param string str
	 *@param bool ret
	**/
	public function ident($str, $ret = true) {
		$lines = explode("\r\n", $str);
		$opened = 0;
		$tmpRes = null;
		
		foreach ($lines as $line) {
			$i = 0;
			$tmpTab = null;
			// Delete possible tabs
			$line = trim($line);
			
			// Closed if?
			$opened-= (preg_match('/^}$/', $line)) ? 1 : 0;
			
			// Else here?
			$opened-= (preg_match('/^}else{$/', $line)) ? 1 : 0;
			
			// Put corresponding tabs
			for($i = 0; $i<$opened; $i++)
				$tmpTab .= '	';
			
			/// If it is if, else end, while, for or foreach
			$opened+=(preg_match('/^if.*{/', $line) || preg_match('/^}else{/', $line) || preg_match('/^while.*{/', $line) ||
			preg_match('/^for.*{/', $line) || preg_match('/^foreach.*{/', $line)) ? 1 : 0;
			
			$tmpRes .= $tmpTab.$line."\r\n";
		}
		
		if($ret == true) {
			return $tmpRes;
		}else{
			$this->result = $tmpRes;
		}
	}
	
	/**
	 * Public getRes
	 *
	 *@return string/bool
	*/
	public function getRes() {
		if (!empty($this->result))
			return $this->result;
		
		return false;
	}
}