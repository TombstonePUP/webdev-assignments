<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Spotify</title>
    <link rel="icon" href="../assets/images/spotify-icon-black.png">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="gradient-body">
    <div class="sign-container">
        <img id="main-icon" src="../assets/images/spotify-icon.png" alt="icon">
        <h1>Log in to Spotify</h1>

        <section class="log-alts">
            <button>
                <img src="../assets/images/google-icon.png" alt="google-icon">
                <div>Sign up with Google</div>
            </button>
            <button>
                <img src="../assets/images/fb-icon.png" alt="fb-icon">
                <div>Sign up with Facebook</div>
            </button>
            <button>
                <img src="../assets/images/apple-icon.png" alt="apple-icon">
                <div>Sign up with Apple</div>
            </button>
        </section>

        <div id="line"></div>

        <section class="inputs">
            Email or username
            <input type="text" placeholder="Email or username">
            Password
            <input type="password" placeholder="Password">
            <div>
                <img src="../assets/images/visibilitiy-icon.png">
            </div>
            <button>Login</button>
        </section>

        <a>Forgot your password?</a>
        <p>Don't have an account? <a href="login.php">Sign up for Spotify</a></p>

        <p>This site is protected by reCAPTCHA and the Google
            <a href="#"> Privacy Policy </a> and <a href="#"> Terms of Service </a> apply.
        </p>
    </div>
</body>

</html>