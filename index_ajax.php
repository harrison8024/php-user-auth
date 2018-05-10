<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP user auth demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="center">PHP User Authentication</h1>
        <h2 class="center">Now with Ajax</h2>
        <h2 class="center red-text darken-2" id="auth-error"></h2>
        <div class="row">
            <form  class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="username"type="text" name="username">
                        <label for="username">Username</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="password" type="password" name="password">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row center">
                    <button id="sign-in"class="btn" type="button">Sign In</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $('#sign-in').click(()=>{
            const dataToSend = {
                username: $('#username').val(),
                password: $('#password').val()
            };
            $.ajax({
                url: './db_auth_ajax.php',
                method:'POST',
                dataType:'JSON',
                data: dataToSend,
                success: resp => {
                    console.log('server Response:', resp);
                    if(resp.success){
                        window.location.href = '/profile.php';
                    }else {
                        $('#auth-error').text(resp.error);
                    }
                }
            });
        });
    </script>
</body>
</html>