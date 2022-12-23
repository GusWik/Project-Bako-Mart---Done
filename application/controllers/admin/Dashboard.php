<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('m_umum'); //cek data sudah login atau belum
    }

	public function under_construction()
	{
		echo "Under Construction";
		die;
	}
	

    public function index()
	{

		$data['userLogin'] 			= $this->session->userdata('loginData');
		$data['v_content'] 			= 'member/dashboard/content';
		$this->load->view('member/layout',$data);
	}
    
	function decryptIt( $q ) {
		$cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
		$qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
		return( $qDecoded );
	}
       
}
