<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recaptcha extends CI_Controller {

	public function index()
	{
		$this->load->view('recaptcha');
    }
    
    public function authentication()
    {
        $form_response = $this->input->post('g-recaptcha-response');
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $secret_key = "YOUR_SECRET_KEY";
        $response = file_get_contents($url."?secret=".$secret_key."&response=".$form_response."&remoteip=".$_SERVER["REMOTE_ADDR"]);
        $data = json_decode($response);
        if(isset($data->success) && $data->success=="true"){
            echo "Success";
        }else{
            echo "Please fill Recaptcha";
        }
    }
}
