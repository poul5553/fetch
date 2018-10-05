<?php
if (!isset($pageTitle)) {
    $pageTitle = "Forside"; 
}
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo $pageTitle ?></title>


  

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Patrick+Hand&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <!-- Egen css -->
    <link rel="stylesheet" type="text/css" href="./resources/css/main.css">
    <!-- Manifest -->
    <link rel="manifest" href="./resources/app/site.webmanifest">

</head>
<body>
    <nav>
         
    <section class="nav-menu">

    </section>
    </nav>

     <h1><?php echo $pageTitle ?></h1>

     <ul>
        <li>
            <a href="index.php">Forside</a>
        </li>
        <li>
            <a href="contact.php">Kontakt os</a>
        </li>
     </ul>