<?php
    class Pages extends Controller {
        public function __construct () {
           
        }

        public function index(){
            
            if(isLoggedIn()) {
                redirect('posts');
            }
            $data = [
                'title' => 'ShareOps',
                'description' => 'ShareOps is a simple social network built for your amusement'
            ];
            
            $this->view('pages/index', $data);
        }

        public function about() {
            $data = [
                'title' => 'About Us',
                'description' => 'Share posts with other users'
            ];
            $this->view('pages/about', $data);
        }
    }

 

?>