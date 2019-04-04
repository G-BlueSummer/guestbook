<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/icon.css">
    <title>留言板</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s6 offset-s3">
                <h3>注册</h3>
                <form action="reg.php" method="post">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="name" id="name" class="validate">
                            <label for="name">用户名:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <input type="text" name="passwd1" id="passwd1" class="validate">
                            <label for="passwd1">密码:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock_outline</i>
                            <input type="text" name="passwd2" id="passwd2" class="validate">
                            <label for="passwd2">确认密码:</label>
                        </div>
                    </div>
                    <!-- <div class="divider"></div> -->
                    <div class="row">
                        <input type="submit" class="btn-large" value="注册">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/materialize.min.js"></script>
</body>

</html>