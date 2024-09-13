<!DOCTYPE html>
<html lang="en">
    <
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESPACE ETUDIANT</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ded8d8;
            background-image: url(../images/etudiant-1.jpg );
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 , h1 {
            text-align: center;
             color: #007bff;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"].bottom {
            background-color: #0056b3;
        }
    </style>
</head> 
<body>
<div id="wrapper">
<!--Header STARTS here -->
<div id="header">
<div id="logo"><h1> <img src="images/linux2.png"></h1> </div>
<div id="navigation"> 
<h1>ESPACE  RESERVER  AUX ETUDIANT IIT </h1>
    <div class="container">
        <h2> Se connecter</h2>
        <form action="ID_Login.php" method="POST">
        <?php if(isset($_Get['error']))?>
     <p> <div class="form-group">  </p>
            
  
                <label for="username">Nom d'utilisateur:</label>
                <input type="text"  name="username"  placeholder="User Name">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe:</label>
                <input type="password"  name="password"  placeholder="password">
            </div>
            <div class="form-group">
                <input type="submit" >
            </div>
        </form>
    </div>
</body>
</html>
<!-- <div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.fAllowGrayOutLightBox &amp;&amp; showLightboxProgress() }"></div> -->
