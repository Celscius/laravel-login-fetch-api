<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>login box - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    </style>
  </head>
  <body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="login-container animated fadeInDown bootstrap snippets bootdeys">
      <div class="loginbox bg-white">
        <div class="loginbox-title">SIGN IN</div>
        <div class="loginbox-social">
          <div class="social-title ">Connect with Your Social Accounts</div>
          <div id="loader" style="display: none;">
              <img src="https://i.gifer.com/ZKZg.gif" style="height: 300px;width: 200px;padding-top: 50px;">
          </div>
            
          <div class="social-buttons">
            <a href class="button-facebook">
              <i class="social-icon fa fa-facebook"></i>
            </a>
            <a href class="button-twitter">
              <i class="social-icon fa fa-twitter"></i>
            </a>
            <a href class="button-google">
              <i class="social-icon fa fa-google-plus"></i>
            </a>
          </div>
        </div>
        <div class="loginbox-or">
          <div class="or-line"></div>
          <div class="or">OR</div>
        </div>
        <form>
          @csrf

        <div class="loginbox-textbox">
          <input type="text" id="user" class="form-control" placeholder="Email" value="admin@material.com">
        </div>
        <div class="loginbox-textbox">
          <input type="Password" id="password" class="form-control" placeholder="Password" value="secret">
        </div>
        <div class="loginbox-forgot">
          <a href>Forgot Password?</a>
        </div>
        <div class="loginbox-submit" id="login">
          <input type="button" class="btn btn-primary btn-block" value="Login">
        </div>
        <div class="loginbox-signup">
          <a href="#register.html">Sign Up With Email</a>
        </div>
      </div>
    </form>
      <div class="logobox"></div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <script type = "text/javascript" >
    (login = () => {
        document.getElementById("login").onclick = () => {
            const user = document.getElementById("user").value;
            const password = document.getElementById("password").value;
            const url = "";

            (async () => {
                const rawResponse = await fetch('http://127.0.0.1:8000/app/login', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        "_token": "{{ csrf_token() }}",
                        "email":user,
                        "password":password
                    })
                });

                const content = await rawResponse.json();
                location.href = content.URL;
                console.log(content);
            })();
           
        }
    })()
</script>
  </body>
</html>