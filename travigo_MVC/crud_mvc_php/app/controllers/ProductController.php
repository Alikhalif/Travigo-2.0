<?php

    require_once(MODELS.'/travels.php');
    
    class ProductController
    {
        public function getAll()
        {
            $travel = new Travale();
            $data['products'] = $travel->getAll();
            View::load('Admin',$data);
        }

        public function Add(){
            View::load('AddProduct');
        }

        public function action(){
            if(isset($_POST['btnAdd'])){
                $datat = array(
                    'title' => $_POST['ville'],
                    'Price' => $_POST['price'],
                    'dateD' => $_POST['date'],
                );
                

                $db = new Travale();

                $db->insertProduct($datat);

                header('location: '.BURL.'Product/getAll');
            }
        }

        public function updatePage(){
            View::load('UpdateProduct');
        }

        public function getProductC($id){
            
            // if(isset($_POST['edit'])){
                // echo $_POST['id'];
                // $data = array(
                //     'id' => $_POST['id']
                // );
                
                $db = new Travale();
                $product = $db->getProduct($id);
                return $product;
            // }
            // View::load('UpdateProduct');
            header('location: '.BURL.'Product/updatePage');
        }

        public function deleteC($id){

            $t = new Travale();
            $t->delete($id);
                
            header('location: '.BURL.'Product/getAll');
        }

        public function UpdateC($id){
            if(isset($_POST['btnEdit'])){
                $data = array(
                    'id' => $_POST['id'],
                    'title' => $_POST['ville'],
                    'Price' => $_POST['price'],
                    'dateD' => $_POST['date']
                );
                $res = Travale::Update($data);
                if($res === 'ok'){
                    header('location: '.BURL.'Product/getAll');
                }
                else{
                    echo 'error';
                }
            }
        }
    }
?>