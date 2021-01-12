<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập - OCOP</title>
    <link rel="stylesheet" href="public/login/css/login-style.css">
</head>
<body>
    <div class="background">
            
    </div>
    <div class="container">
        <div class="box">
            <form action="?url=Validate/login" method="post">
                <div class="form-control">
                    <label for="#txtUser">Tài khoản: </label><input name="txtUser" id="txtUser" type="text">
                </div>
                <div class="form-control">
                    <label for="#txtPass">Mật khẩu: </label><input name="txtPass" id="txtPass" type="password"">
                </div>
                <p id="error-message"><?php echo $params['errMess']?></p>
                <div class="form-check"><input type="checkbox" name="remember" id="remember"><span>Nhớ mật khẩu?</span></div>
                <div class="form-btn"><button name="login" type="submit">Đăng nhập</button></div>
                <a href="">Quên mật khẩu?</a>
            </form>
        </div>
    </div>
</body>
</html>