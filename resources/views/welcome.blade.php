<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>
    <form>
        <label for="phone">Phone Number</label>
        <input name="phone" id="phone" type="text">
        <div id="recaptcha-container"></div>
        <button type="submit" onclick="">Send</button>
        <button class="g-recaptcha"
                data-sitekey="reCAPTCHA_site_key"
                data-callback='onSubmit'
                data-action='submit'>Submit</button>
        <div id="error" style="color:red; display: none"></div>
        <div id="sentMessage" style="color:green; display: none"></div>
    </form>

    <!-- Insert this script at the bottom of the HTML, but before you use any Firebase services -->
{{--    <script src="https://www.gstatic.com/firebasejs/10.4.0/firebase-recaptcha.js"></script>--}}
    <script type="module">
        import { initializeApp } from 'https://www.gstatic.com/firebasejs/10.4.0/firebase-app.js'

        // If you enabled Analytics in your project, add the Firebase SDK for Google Analytics
        import { getAnalytics } from 'https://www.gstatic.com/firebasejs/10.4.0/firebase-analytics.js'

        // Add Firebase products that you want to use
        import { getAuth } from 'https://www.gstatic.com/firebasejs/10.4.0/firebase-auth.js'
        import { getFirestore } from 'https://www.gstatic.com/firebasejs/10.4.0/firebase-firestore.js'


        const firebaseConfig = {
            apiKey: "AIzaSyDZ-zP8eB2SV8oYemzHOR_j-lfBwO91VK4",
            authDomain: "laravel-aut-otp-test.firebaseapp.com",
            projectId: "laravel-aut-otp-test",
            storageBucket: "laravel-aut-otp-test.appspot.com",
            messagingSenderId: "615396648456",
            appId: "1:615396648456:web:361409cdb82bf14a4913bd",
            measurementId: "G-DH2YX10WMK"
        };

        // Initialize Firebase
        const firebase = initializeApp(firebaseConfig);
        const analytics = getAnalytics(firebase);

        function onSubmit(token) {
            document.getElementById("demo-form").submit();
        }
    </script>
</body>
</html>
