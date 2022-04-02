<!-- made with ❤ by Joshimello -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="file/favicon.png">

    <link rel="stylesheet" href="https://chibimello.com/css/flatly.bootstrap.min.css">
    <link rel="stylesheet" href="https://chibimello.com/css/fontawesome.css">

    <script src="https://chibimello.com/js/bootstrap.bundle.js"></script>
    <script src="https://chibimello.com/js/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <meta name="google-signin-client_id" content="your_app_id">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <style type="text/css">
        body {
            background: #F2F2F2;
            font-family: Poppins;
        }

        .row {2
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .red {
            color: red;
        }

        .display-6 {
            font-weight: 700;
            font-family: Poppins !important;
            font-size: 1.5rem;
        }

        .g-signin2{
            width: 100%;
        }

        .g-signin2 > div{
            margin: 0 auto;
        }

        [type=radio] { 
          position: absolute;
          opacity: 0;
          width: 0;
          height: 0;
        }

        [type=radio] + img {
          cursor: pointer;
        }

        [type=radio]:checked + img {
          outline: 6px solid #2C3E50;
          border-radius: 10px;
        }

    </style>
</head>
<body>
    <div class="mt-5 row">
        <div class="col-xs-12 offset-sm-1 col-sm-10 offset-md-2 col-md-8 offset-lg-3 col-lg-6">
            <div id="content" class="bg-white rounded shadow-sm text-center p-5">
                <span class="display-6 d-block">voting system</span>
                <div class="userwrapper mb-3">
                    <span id="user"></span>
                </div>
                <span class="red logininfo">login below</span>
                <div class="g-signin2 mt-2" data-onsuccess="onSignIn"></div>
                <div class="votecontent mt-5">
                    
                </div>
            </div>
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>