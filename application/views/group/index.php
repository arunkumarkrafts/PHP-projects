<div class="container">
    <div class="row">
        <?PHP
            unset($group);
            foreach($groupList as $group){
                echo "Group : $group->groupName";
                foreach($group->tasklist as $task){
                    echo "task : $task";
                }
            }
        ?>
    </div>
</div>