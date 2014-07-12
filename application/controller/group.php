<?php

/**
 * Class Group
 */
class Group extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/group/index (which is the default page / home page)
     * 
     */
    public function index($username)
    {
        $groupList = null;
        $group_model = $this->loadModel('GroupModel');
        $groups = $group_model->getAllGroups($username);
        $i = 0;
        foreach($groups as $group){
                
                $group = new GroupList($group->groupname);
                $tasks = $group_model->getAllTasks($group->groupName);
                foreach($tasks as $task){
                    $group->tasklist[] = $task->taskname;
                }
                $groupList[] = $group;
            }
        require 'application/views/_templates/header.php';
        require 'application/views/group/index.php';
        require 'application/views/_templates/footer.php';  
    }
 
}
class Grouplist
{
    public $groupName;
    public $tasklist;
    function __construct($groupName){
        $this->groupName = $groupName;
    }
    
}
    
    
?>
    
