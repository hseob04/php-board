<?php

    $connect = mysqli_connect("localhost","root","","board") or die("fail");
    
    $id = $_GET['name'];
    $pw = $_GET['pw'];
    $title = $_GET['title'];
    $connect = $_GET['content'];
    $date = date('Y-m-d H:i:s');

    $url = './index.php';

    $query = "insert into board (number, title, content, date, hit, id, password) values(null,'$title','$connect','$date',0,'$id','$pw')";

    $result = $connect->query($query);
    if($result){
        ?><script>
            alert("<?php echo $URL?>");
        </script>
        <?php
    }
    else{
        echo "FAIL";
    }
    mysqli_close($connect);

?>