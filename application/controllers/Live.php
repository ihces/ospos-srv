<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Live extends CI_Controller
{
	public function index()
	{
		echo json_encode(true);
	}

}
?>
