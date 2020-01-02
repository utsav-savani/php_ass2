<?php

include_once './dbcon.php';

class crud extends con{
    public function __construct() {
        parent::__construct();
    }
    
    public function insert($query){
        $res = $this->dbh->query($query);
        
        if($res){
            echo 'ins success';
        }
        else{
            echo 'ins fail';
        }
    }
    
     public function getData($query){
            $res = $this->dbh->query($query);
            
            if($res == FALSE){
                return FALSE;
            }
            
                $rows=[];
                while ($row = mysqli_fetch_array($res)) {
                     $rows[] = $row;
                
               
            }
             return $rows;
        }
}