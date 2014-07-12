<?php

/**
 * Class Login
 */
class Login extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/login/index (which is the default page / home page)
     * 
     */
    
    public function index($login_successful)
    {
        //echo "login/index";
        require 'application/views/_templates/header.php';
        require 'application/views/login/index.php';
        require 'application/views/_templates/footer.php';  
    }
    

    /**
     * PAGE: login
     * this function validates the supplied username and the password and pass it on to the group model view
     */
    public function verify()
    {
        
        // run the login() method in the login-model, put the result in $login_successful (true or false)
        $login_model = $this->loadModel('LoginModel');
        // perform the login method, put result (true or false) into $login_successful
        $login_successful = $login_model->login();

        // check login status
        if ($login_successful) {
            // if YES, then move user to dashboard/index (btw this is a browser-redirection, not a rendered view!)
            header('location: ' . URL . 'group/index');
        } else {
            // if NO, then move user to login/index (login form) again
            header('location: ' . URL . 'login/index/false');
        }

    }
    
   
}
    
    
?>
    
