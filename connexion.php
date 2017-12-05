<?php



try
{
    // On se connecte à MySQL
    $bdd = new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password);
}
catch(Exception $e)
{
    //  En cas d'erreur, on affiche un message et on arrête tout
   die('Erreur : '.$e->getMessage());
}
?>

<?php
try
{
// On se connecte à MySQL
}
catch(Exception $e)
{
// En cas d'erreur, on affiche un message et on arrête tout
die('Erreur : '.$e->getMessage());
}
//
// $task_title = $_POST ['task_title'];
// $task_description = $_POST ['task_description'];
// $task_start_timestamp = $_POST ['task_start_timestamp'];
// $task_end_timestamp= $_POST ['task_end_timestamp'];
//
//
// $query = $bdd ->prepare('INSERT INTO task(task_title,task_description, task_start_timestamp, task_end_timestamp,) VALUES (:task_title,:task_description,:task_start_timestamp, :task_end_timestamp)');
// $query -> bindParam(":task_title", $task_title, PDO::PARAM_STR);
// $query-> bindParam(":task_description", $task_description, PDO::PARAM_STR);
// $query -> bindParam(":task_start_timestamp", $task_start_timestamp, PDO::PARAM_STR);
// $query -> bindParam(":task_end_timestamp", $task_end_timestamp, PDO::PARAM_INT);

?>
