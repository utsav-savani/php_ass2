    <?php
    class con{
        var $host = "localhost";
        var $unm = "root";
        var $pass = "";
        var $dbname ="PHP_OOP_CRUD";
        var $dbh="";
        
        function __construct() {
            $this->dbh = mysqli_connect($this->host, $this->unm, $this->pass, $this->dbname);
            
            if($this->dbh)
                echo 'success';
            else {
                echo 'fail';
            }
        }
    }   
    
        
    
    $c = new con();
    
    
        ?>
    