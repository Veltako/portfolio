<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Affichage des données issues du formulaire</h1>

    <ul>
       <li><?php echo $_POST ['name']; ?></li> 
       <li><?php echo $_POST ['email']; ?></li> 
       <li><?php echo $_POST ['subject']; ?></li> 
       <li><?php echo $_POST ['message']; ?></li> 
       <li><?php echo $_POST ['groupe']; ?></li>
    </ul>

</body>
</html>