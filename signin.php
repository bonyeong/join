<!doctype html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="main.css" type="text/css">

</head>
<body>
    <form  action="./logoin.php" method="post" onsubmit="return checkSubmit()"/>

    <div class="container">
        <form class="form form-login" id="login">
            <h1 class="form__title">로그인</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" name= "memberID" class="form__input" autofocus placeholder="학번을 입력해주세요">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" name="memberPW" class="form__input" autofocus placeholder="비밀번호를 입력해주세요">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">로그인</button>
            <p class="form__text">
                <a href="#" class="form__link">비밀번호 찾기</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="./signup.php">회원가입하기</a>
            </p>
        </form>
    </div>
    <script src="../login-signup-form/src/main.js"></script>
</body>
