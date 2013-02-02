<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	//public function index()
	//{
	//	$this->load->model('Task', 'task');
//
	//	$data = $this->task->get_last_ten_entries();

	//	$all_data = $this->task->get_all();

	//	$this->load->view('my_template', array('rows' => $data, 'all_data' => $all_data));
	//}

	public function index()
	{

		$this->load->model('Telefon');

		$data = $this->Telefon->get_last_ten_entries();

		$all_data = $this->Telefon->get_all();

		

		$this->load->view('Telefon', array('rows' => $data, 'all_data' => $all_data));

        $this->load->view ('telefonviews');
        //$info=$this->Telefon->inputinfo();

        //$info = $this->Telefon->inputinfo();
	}
	public function Telefoninfo()
	{
		$this->load->model('telefonviews');
		$this->load->view ('telefonviews');
		$info=$this->Telefoninfo->inputinfo();
		$this->load->view('Telefonviews',array('info' =>$info ));

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */