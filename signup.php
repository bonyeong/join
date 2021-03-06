<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel=stylesheet href='main.css' type='text/css'>
   <!-- <link rel="stylesheet" href="C:/Bitnami/wampstack-8.0.6-0/apache2/htdocs/join/main.css"> -->
</head>
<body>

  <!--membersave.php 파일로 회원정보저장-->
<form  method="post" action="memberSave.php">
    <div class="container">
        <form class="form form-signup" id="createAccount">
            <h1 class="form__title">회원가입</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" name = "memberID" autofocus placeholder="학번">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" name="memberEmail" autofocus placeholder="이메일">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" name="memberPW" autofocus placeholder="비밀번호">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" name="pw2" autofocus placeholder="비밀번호 확인">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">가입하기</button>
            <p class="form__text">
                <a class="form__link" href="./signin.html">이미 계정이 있습니까? 로그인하기</a>
            </p>
        </form>
    </div>
    <script src="../login-signup-form/src/main.js"></script>
</body>
