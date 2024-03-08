<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style/style2.css">
    
</head>
<body>
    <section class="wrapper">
        <div class="form singup">
            <header>Signup</header>
            <form action="regist.php" method="post">
                <input type="text" placeholder="Full name" name="fullname" required>
                <input type="email" placeholder="Email address" name="email" required>
                <input type="password" minlength="5" maxlength="10" placeholder="Password" name="pass" required>
                <div class="checkbox">
                    <input type="checkbox" required id="signCheck">
                    <label for="signCheck">I accept all terms & conditions</label>
                </div>
                <input type="submit" value="Signup" />
            </form>
        </div>


        <div class="form login" >
            <header>Login</header>
            <form action="login.php" method="post">
                <input type="email" placeholder="Email address" name="email" required>
                <input type="password" minlength="5" maxlength="10" placeholder="Password" name="pass" required>
                <a href="#">Forgot password?</a>
                <input type="submit" value="Login" />
            </form>
        </div>
<script>
    const wrapper = document.querySelector(".wrapper"),
            signupHeader = document.querySelector(".singup header"),
            loginHeader = document.querySelector(".login header");


            loginHeader.addEventListener("click", () => {
                wrapper.classList.add("active");
            })

            signupHeader.addEventListener("click", () => {
                wrapper.classList.remove("active");
            });
     
</script>
    </section>
</body>
</html>