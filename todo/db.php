<?php
class Db { 
      
    private $mysql; 
      
    function __construct() { 
        $this->mysql = new mysqli('localhost', 'root', '') or die('problem'); 
    } 
} // end class

function delete_by_id($id) { 
    $query = "DELETE from todo WHERE id = $id"; 
    $result = $this->mysql->query($query) or die("there was a problem, man."); 
      
    if($result) return 'yay!'; 
}

function update_by_id($id, $description) { 
    $query = "UPDATE todo  
              SET description = ?  
          WHERE id = ? 
              LIMIT 1"; 
            
    if($stmt = $this->mysql->prepare($query)) { 
        $stmt->bind_param('si', $description, $id); 
        $stmt->execute(); 
        return 'good job! Updated'; 
    } 
}

?>