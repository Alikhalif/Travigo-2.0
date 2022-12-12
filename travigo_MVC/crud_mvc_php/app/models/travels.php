<?php
    class Travale
    {
        static public function getAll(){
            $data = DB::connect()->prepare('SELECT * FROM voyage');
            $data->execute();
            return $data->fetchAll();
            $data->close();
        }

        public function insertProduct($datat){
            $db = DB::connect()->prepare('INSERT INTO voyage(title,Price,dateD) VALUES(:title,:Price,:dateD)');
            $db->bindParam(':title',$datat['title']);
            $db->bindParam(':Price',$datat['Price']);
            $db->bindParam(':dateD',$datat['dateD']);
            $db->execute();
                            
        }

        public function getProduct($id){
            // $id = $data['id'];
            
            $db = DB::connect()->prepare("SELECT * FROM voyage WHERE id = $id");
            $db->execute();
            $travel = $db->fetchAll();
            return $travel;
        }

        // public function updateProduct($data){
        //     $db = DB::connect()->prepare('UPDATE voyage SET ')
        // }

        public function delete($id){
            $db = DB::connect()->prepare("DELETE FROM voyage WHERE id = $id");
            $db->execute();
            if($db->execute()){
                return "ok";
            }else{
                return "errur";
            }
        }

        public function Update($data){
            $db = DB::connect()->prepare('UPDATE voyage SET title = :title, Price = :Price, dateD = :dateD WHERE id = :id');
            $db->bindParam(':id',$datat['id']);
            $db->bindParam(':title',$datat['title']);
            $db->bindParam(':Price',$datat['Price']);
            $db->bindParam(':dateD',$datat['dateD']);
            if($db->execute()){
                return 'ok';
            }
        }
    }
?>