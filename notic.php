<?php
    var_dump($_POST);
    $content = $_POST['content'];
    $user = $_POST['user'];

    $n = [
        'qwe',
        'asd',
        'zxc'
    ];

    if($content == ''){
        die("留言不能为空");
    }

    if( $user == '' ){
        die("user不能为空");
    }

    foreach( $n as $name){
        if( $user == $name ){
            die("不能使用该用户名");
        }
    }

    // for ($i=0; $i<10; $i++){
    //     echo $i;
    //     echo "<br>";
    // }

?>