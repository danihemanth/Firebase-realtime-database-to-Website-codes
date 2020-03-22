<html>
<head>
    <title>upload image to firebase</title>
</head>
<body>
<center>
    <form enctype="multipart/form-data">
        <label>select image : </label>
        <input type="file" id="image" accept="image/*"><br><br>
        <button type="button" onclick="upload()">Upload</button>
    </form>
</center>






<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyBiCasLzsPZTObojflj5FmbdR56FwEsT-8",
    authDomain: "iotfirebaseproject-760c1.firebaseapp.com",
    databaseURL: "https://iotfirebaseproject-760c1.firebaseio.com",
    projectId: "iotfirebaseproject-760c1",
    storageBucket: "iotfirebaseproject-760c1.appspot.com",
    messagingSenderId: "461152123840",
    appId: "1:461152123840:web:87a2fe8378c166c6322625"
  };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script type="text/javascript" src="js/uploadimage.js"></script>
</body>
</html>