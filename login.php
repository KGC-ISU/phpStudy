<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>로그인</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo login_logo">
                창업지원펀드
            </div>
        </div>
    </header>

    <div class="login-section">
        <div class="login-info">
            <p class="big-info"><a href="/index.php">창업지원펀드</a></p> 
            <p class="small-info">함께 발전하는 즐거움</p>
        </div>
        <div class="login_form">
            <form action="login_ok.php" method="post">
                <input type="text" name="id" placeholder="아이디"><br>
                <input type="password" name="password" placeholder="비밀번호"><br>
                <input class="loginBtn" type="submit" value="로그인">
            </form>
        </div>
        <div class="login-bottom">
            <p>아직 회원이 아니신가요?</p>
            <div class="registerBtn">
                <a href="register.php">회원가입</a>
            </div>
        </div>
    </div>
</body>
</html>