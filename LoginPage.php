<!DOCTYPE html>
<head>
    
    <link href="main.css" rel="stylesheet">

    <nav>
        <ul>
            <li><a href="index.html" class="button">Home</a></li>
        </ul>
    </nav>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="stylesheet" href="./src/main.css">
</head>
<body>
   
      
   
    <div class="container">
        <form class="form" id="login">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Username or email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Continue</button>
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="./" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>
        <form class="form form--hidden" id="createAccount">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <!-- <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div> -->
            <div class="form__input-group">
                <input type="text" id="email_feild" class="form__input" autofocus placeholder="Email...">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" id="password_feild" class="form__input" autofocus placeholder="Password...">
                <div class="form__input-error-message"></div>
            </div>
            <!-- <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password">
                <div class="form__input-error-message"></div>
            </div> -->
            <button onclick="createUser()" class="form__button" type="submit">Continue</button>
            <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>
    </div>
    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.6/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.6/firebase-analytics.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries
      
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
          apiKey: "AIzaSyADUne9Z-Um5yyQ5NkYlE89oEPe1M9XdD0",
          authDomain: "virtugal-8d000.firebaseapp.com",
          projectId: "virtugal-8d000",
          storageBucket: "virtugal-8d000.appspot.com",
          messagingSenderId: "199556508081",
          appId: "1:199556508081:web:f68de959748d2f444db590",
          measurementId: "G-F2JC7XTP69"
        };
      
        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
      </script>
    <script src="main.js"></script>
    <script src="login.js"></script>
    <script src="index.js"></script>
   
    <?php
$servername = "VirtuGal";
$username = "Santiago Espinoza";
$password = "santiago0216";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

</body>





