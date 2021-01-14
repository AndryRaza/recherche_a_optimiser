<?php

//Flemme de commenter 

$temp = $_POST['suggest'];


$servername = "localhost";
$username = "root";
$password = NULL;
$dbname = "alphabet";

$bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$req = $bdd->prepare("SELECT * FROM `ville` WHERE note >= '$temp'");
$req->execute();


$tab = $req->fetchAll(PDO::FETCH_ASSOC);
$req->closeCursor();

?>
<h1> <?php echo count($tab) ?> résultats trouvés </h1>
<?php

foreach ($tab as $key => $value) {
?>

    <p><?= $value['nom']; ?></p>

<?php }
