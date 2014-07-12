<?php

class LoginModel
{
    
    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A PDO database connection
     */
    function __construct($db) {

        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    /**
     * verify the username and password
     */
    public function verify()
    {
        $sql = "SELECT username, password FROM user WHERE username = :username";
        $query = $this->db->prepare($sql);
        $query->execute(array(':username' => $_POST['inputUsername']));

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // libs/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change libs/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        $data =  $query->fetch();

        if ($_POST['inputPassword'] === $data->password){
            return true;
        }
        else{
            return false;
        }
    }
}
