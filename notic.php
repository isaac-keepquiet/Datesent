<?php
    // var_dump($_POST);
    $content = $_POST['content'];
    $user = $_POST['user'];

    function post( $content ){
        if($content == ''){
            return false;
        }

        $n = ['qwe', 'asd', 'zxc']; 
        foreach( $n as $name){
            if( $content == $name ){
                return false;
                // die("Character to unavailable");
            }
        }   

        return ture;
    }

    $is = post($content);
    if($is == false){
        die('Content is wrong.');
    }

    $is = post($user);
    if($is == false){
        die('User is wrong');
    }

    // var_dump($content, $user);


    // if( $user == '' ){
    //     die("user不能为空");
    // }

    

    // for ($i=0; $i<10; $i++){
    //     echo $i;
    //     echo "<br>";
    // }

?>