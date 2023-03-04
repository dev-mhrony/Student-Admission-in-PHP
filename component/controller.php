



<!-- Author Name: MH RONY.
                        GigHub Link: https://github.com/dev-mhrony
                        Facebook Link:https://www.facebook.com/dev.mhrony
                        Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
                        for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
                        Visit My Website : developerrony.com -->


<?php

if(isset($_GET['a']))
{
    if(file_exists(('admin/'.$_GET['a'].".php")))
    {
        include('admin/'.$_GET['a'].".php");
    }
    else
    {
        print '<h4>Warning ! You are trying to violating our system.</h4>';
        var_dump($_SERVER);
    }
}
else
{
    include('admin/student_add.php');
}


?>