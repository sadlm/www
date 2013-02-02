<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		echo 'news';
	}


	public function best_news()
	{
		$this->load->model('Task', 'task');
		$all_data = $this->task->get_last_ten_entries();

		$this->load->view('best_news', array('all_data' => $all_data));
	}
}