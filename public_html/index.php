<?php
// Vis indhold i console:
// echo $_SERVER["DOCUMENT_ROOT"];
// echo $_SERVER["DOCUMENT_ROOT"] . "/resources/incl/header.php";
// var_dump ($_SERVER); 
// phpinfo (); 

// sti til include 
// $_SERVER["DOCUMENT_ROOT"] er serverdel
// "/resources/incl/header.php" er det lokale
include_once $_SERVER["DOCUMENT_ROOT"] . "/resources/incl/header.php"; 
?> 

    <header class="head">
       



    </header>

<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/resources/incl/footer.php";
?>