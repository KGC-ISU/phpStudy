<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>회원가입</title>
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

    <div class="register-section">
        <div class="login-info">
           <a href="/index.php"><a href="/index.php">창업지원펀드</a></a>
            <p class="small-info">함께 발전하는 즐거움</p>
        </div>
        <div class="login_form">
            <form action="register_ok.php" method="post">
                <input type="text" name="id" placeholder="아이디"><br>
                <input type="text" name="name" placeholder="이름"><br>
                <input type="password" name="password" placeholder="비밀번호"><br>
                <input class="registerBtn" type="submit" value="회원가입">
            </form>
        </div>
        <div class="register-bottom">
            <p>이미 회원이신가요?</p>
            <div class="registerBtn">
                <a href="login.php">로그인</a>
            </div>
        </div>
    </div>

    
</body>
</html>