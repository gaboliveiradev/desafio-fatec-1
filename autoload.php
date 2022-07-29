<?php
    function myAutoload($class) {
        if(file_exists("./Controler/$class.php")) {
            include "./Controller/$class.php";
        } else if(file_exists("./Model/$class.php")) {
            include "./Model/$class.php";
        } else if(file_exists("./DAO/$class.php")) {
            include "./DAO/$class.php";
        }
    }

    spl_autoload_register("myAutoload");