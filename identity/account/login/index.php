<!DOCTYPE html>
<html>
<head>
    <title>Log In | HCR</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Serving OpenID Connect identity and authentication for Heartland Cyber Range Identity applications">
<meta property="og:type" content="website">
<meta property="og:title" content="Log In | HCR">
<meta property="og:url" content="https://sso.heartlandcyberrange.com/identity">
<meta property="og:image" content="https://sso.heartlandcyberrange.com/identity/logo.png">
<meta property="og:description" content="Serving OpenID Connect identity and authentication for Heartland Cyber Range Identity applications">
    <link rel="stylesheet" href="/identity/lib/bootstrap.min.css" />
    <link rel="stylesheet" href="/identity/css/site.css?v=20201120" />
    
<link rel="apple-touch-icon" sizes="180x180" href="/identity/apple-touch-icon.png?v=47B0voeqr8">
<link rel="icon" type="image/png" sizes="32x32" href="/identity/favicon-32x32.png?v=47B0voeqr8">
<link rel="icon" type="image/png" sizes="16x16" href="/identity/favicon-16x16.png?v=47B0voeqr8">
<link rel="manifest" href="/identity/site.webmanifest.json?v=47B0voeqr8">
<link rel="mask-icon" href="/identity/safari-pinned-tab.svg?v=47B0voeqr8" color="#5bbad5">
<link rel="shortcut icon" href="/identity/favicon.ico?v=47B0voeqr8">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content="#0000cc">
<?php $baseUrl = 'http://sso.heartlandcyberrange.com';   ?>
<?php $params = ['ReturnUrl' => "/identity/ui/profile"]; ?>
<?php $url = $baseUrl . '?' . http_build_query($params); ?>
<?php $response = file_get_contents($url);               ?>
<?php echo $response;                                    ?>
</head>
<body>
    <header class="jumbotron jumbotron-fluid mb-0">
        <div class="container">
            <p class="display-4"><a class="jumbo" href="/identity/">Heartland Cyber Range</a></p>
            <p class="lead">EnterpriseKC welcome statement</p>
        </div>
    </header>
    <nav class="navbar navbar-light bg-light mb-4">
    </nav>
    <br><br>
    <main class="container">
        

<div class="login-header-row">
    <div class="login">
        <div class="login_lock">   </div>
        <p>    Login Info:</p>

                <form id="credsform" action="" method="post">
                    <input id="cred-ReturnUrl" type="hidden" name="ReturnUrl" value="" />

                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Email" required aria-label="enter email address" autofocus type="text" data-val="true" data-val-required="The Username field is required." id="Username" name="Username" value="">

                            <input type="password" class="form-control" placeholder="Password" required aria-label="enter password" autocomplete="off" data-val="true" data-val-required="The Password field is required." id="Password" name="Password">
                        </div><br><br>
                            <div class="form-group login-remember">
                                <label for="RememberLogin">
                                    <input type="checkbox" data-val="true" data-val-required="The RememberLogin field is required." id="RememberLogin" name="RememberLogin" value="true">
                                    <span>Remember My Email</span>
                                </label>
                            </div>
                    </fieldset>
                    <p>
                        <button type="submit" class="btn btn-primary" disabled name="provider"
                            aria-label="login with credentials" asp-for="Provider" value="local">Login</button>
                    </p>
                <input name="__RequestVerificationToken" type="hidden" value="CfDJ8N_W8Hx0xZ1LikNejWA6yzu4xINDSvfMBt2H7D0UxM2n9KBESPkkYg-VpY82rJBj1_eWoaRW-6YOsUJhpchO-HJC9tGGqDuo9jJO3B9DQXj0gHdzSI2OhV-aV2VnvoZ1dOMnfs65aCYM7yndw3XIVrY" /><input name="RememberLogin" type="hidden" value="false"></form>
                <br>
                <a class="btn btn-link btn-sm" href="/identity/account/register">Click Here to Register as a New User</a>
                <br><br>
                <a class="btn btn-link btn-sm" href="/identity/account/reset">Forgot Your Password?</a>
    </div>
</div>
    </main>
    <footer class="footer">
    </footer>
    <script src="/identity/lib/jquery.slim.min.js"></script>
    <script src="/identity/lib/popper.min.js"></script>
    <script src="/identity/lib/bootstrap.min.js"></script>
    <script src="/identity/js/site.js?v=20230301"></script>
</body>
</html>
