<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Netcarver\Textile;
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		
		$this->output->enable_profiler(ENVIRONMENT == 'development');
		$this->benchmark->mark('textile_start');
		$this->load->view('welcome_message');
		$parser = new Textile\Parser();

		$st = 'h1. Welcome'. PHP_EOL;
		$str .= '* List item'.PHP_EOL;
		$str .= '* Antother List item';
			$this->benchmark->mark('textile_end');

		echo $parser->textileThis($str);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */