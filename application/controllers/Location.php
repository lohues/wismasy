<?php
class Location extends CI_Controller {

    public function index($kmk = 'home')
	{
        if ( ! file_exists(APPPATH.'views/location.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($kmk); // Capitalize the first letter
        $data['something'] = "hellooooooo";

        $this->load->view('templates/header', $data);
        $this->load->view('location', $data);
        $this->load->view('templates/footer', $data);
	}
}