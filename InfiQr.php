<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * InfiQr Codeigniter Qr Code generator Library
 *
 * Generate Qr code in your CodeIgniter applications.
 *
 * @package			CodeIgniter
 * @subpackage		Libraries
 * @category		Libraries
 * @author			Naseem Fasal
 * @license			None
 * @link			https://github.com/naseemfasal
 */

require_once(dirname(__FILE__) . '/InfiQr/qrlib.php');

class Infiqr 
{


	public function generate($conents,$type)
	{
		    QRcode::$type($conents); 

	}
}
