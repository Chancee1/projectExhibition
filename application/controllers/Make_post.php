<?php

class Make_post extends CI_Controller{
    function __construct(){
 parent::__construct();
 
require_once 'fpdf/fpdf.php';
 $this->load->database();
 $this->load->model('Discover_model');
 $this->load->model('Exhibition_project');
 $this->load->helper('url', 'form');	
 $this->load->library('form_validation');
 $this->load->library("Fpdf");
}          
function index(){

    $result['recommend'] = $this->Discover_model->getRecommend();
    $result['others'] = $this->Discover_model->getOthers();
    $result['user'] = $this->Discover_model->getPersonalTrend();
    $result['trending'] = $this->Discover_model->getTrending();
    $this->load->view('showcase', $result);
   
}
 function do_upload(){
       $config = array(
'upload_path' => "./uploads/",
'allowed_types' => "gif|jpg|jpeg|pdf",
'overwrite' => TRUE

);

$this->load->library('upload', $config);


 if($this->upload->do_upload('project_file')){

    
              $uploaded = $this->upload->data();
              $fileName = $uploaded['file_name'];
               $title = $this->input->post('title');
     $base = $this->input->post('project_base');
     $description = $this->input->post('summary');

      
$this->Exhibition_project->saveProject($title, $base, $description, $fileName);

           }
 }


}

?>