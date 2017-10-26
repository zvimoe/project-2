<?php
   session_start();
   $adata =  $_REQUEST['data'];
   $action = $_REQUEST['action'];
   $meth= strtoupper($_SERVER['REQUEST_METHOD']);
   echo $meth;
   die;
   if ($meth == 'PUT')
    {
        parse_str(file_get_contents("php://input"), $_PUT);

        foreach ($_PUT as $key => $value)
        {
            unset($_PUT[$key]);

            $_PUT[str_replace('amp;', '', $key)] = $value;
        }
        $_REQUEST = array_merge($_REQUEST, $_PUT);
    }
   $role = ""
   switch($action){
       case "login":
       $a=new AdminsApi;
       echo $a->manager($adata);
       $role = $a->getRole() 
       break;
       case "students":
       $s=new StudentsApi;
       echo $a->manager($adata,$role);
       break;
       case "courses":
       $s=new CoursesApi;
       echo $a->manager($adata,$role);
       break;
   }
   ?>
    