<?php
    include "./include/session.php";
    include "./include/dbConnect.php";
    /*echo "<pre>";
    var_dump($_POST);*/
    $memberId = $_POST['memberID'];
    $memberPw = $_POST['memberPW'];


    $sql = "SELECT * FROM membertbl WHERE memberID = '{$memberId}' AND memberPW = '{$memberPw}'";
    $res = $dbConnect->query($sql);

        $row = $res->fetch_array(MYSQLI_BOTH);

        if ($row != null) {

            $_SESSION['ses_userid'] = $row['memberID'];
            echo $_SESSION['ses_userid'].'님 안녕하세요';
            echo "<a href='./signin.php'>로그아웃 하기</a>";
        }

        if($row == null){
            echo '로그인 실패 아이디와 비밀번호가 일치하지 않습니다.';
        }
?>
