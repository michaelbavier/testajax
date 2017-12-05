<?php
require dirname(__FILE__).DIRECTORY_SEPARATOR.'config.php';
require dirname(__FILE__).DIRECTORY_SEPARATOR.'connexion.php';



if (!empty($_GET)&&isset($_GET['delete'])){
	deleteTask($_GET['delete']);
}



if (!empty($_POST)&&isset($_POST['addTask'])) {
	addTask();
}

$tasks = selectAll();
function selectAll(){
	global $bdd;
	$phrase_sql = "SELECT * FROM task";
	$preparation = $bdd->prepare($phrase_sql);
	$preparation->execute();
	return $preparation->fetchAll( PDO::FETCH_ASSOC );
}

function deleteTask($id){
	global $bdd;
	$phrase_sql = "DELETE FROM task WHERE task_id = :id";

	$preparation = $bdd->prepare($phrase_sql);
	$preparation->bindParam(':id',$id,PDO::PARAM_INT);

	if ($preparation->execute()) {
		header('Location: index.php');
	} else {
		echo "OOOPS!";
	}
}


function addTask(){
	global $bdd;

	$phrase_sql = "INSERT INTO task (task_title, task_description)
    VALUES (:title, :details)";
	$preparation = $bdd->prepare($phrase_sql);

	$preparation->bindParam(':title',$_POST['title'],PDO::PARAM_STR);
	$preparation->bindParam(':details',$_POST['description'],PDO::PARAM_STR);

	if ($preparation->execute()) {
		header('Location: index.php');
	} else {
		echo "OOOPS!";
	}



}


if (!empty($_POST)&&isset($_POST['addTask'])){
	//Faire le sql necessaire pour remplir une nouvelle ligne dans la bdd
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
}

if (!empty($_POST)&&isset($_POST['deleteTask'])){
	//Faire le sql necessaire pour effacer une ligne dans la bdd
}

if (!empty($_POST)&&isset($_POST['editTask'])){
	//Faire le sql necessaire pour editer une ligne dans la bdd
}

//Faire le sql necessaire pour récupérer les lignes dans la bdd

// echo json_encode($tasks);







?>
