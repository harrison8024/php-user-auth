<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP user auth demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="center">PHP User Authentication</h1>
        <h2 class="center red-text darken-2"><?= isset($_GET['auth_error']) ? 'Invalid username and/or password':'' ?></h2>
        <div class="row">
            <form action="./db_auth.php" method="POST" class="col s12">
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
                    <button class="btn">Sign In</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>