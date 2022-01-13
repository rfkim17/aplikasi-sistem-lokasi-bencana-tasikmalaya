<?php 

class Title extends CI_Controller {
    
   public function index(){
       $this->load->view('v_smknu');
   }
   public function judul(){
       $this->load->view('vw_judul');
   }
   public function gambar(){
       echo "gambar";
   }
   public function kamera(){
       echo "kamera";
   }
   public function kueh(){
       echo "kueh";
   }
   public function donat(){
    echo "donat";
}
public function rasa(){
    echo "rasa";
}
public function pedas(){
    echo "pedas";
}
public function suuk(){
    echo "suuk";
}
public function sukro(){
    echo "sukro";
}
   
}

?>