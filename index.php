<?php 
	
	$connect = mysqli_connect('127.0.0.1', 'root', 'root', 'contacts') or die("Ошибка" . mysqli_error($connect));

	$delete = "DELETE FROM contacts WHERE id='{$_GET['id']}'";
 	mysqli_query($connect, $delete);

	$select = "SELECT * FROM contacts";
	$query = mysqli_query($connect,$select);

 ?>


 <div class="container">
 	<h1>Контакты</h1>
 	<form action="index.php" method="GET">
 		<input type="text" name="id">
 		<button>Удалить</button>
 	</form>
 	<?php 
 		for ($i=0; $i < 10; $i=$i+1) { 
 			$res1 = $query->fetch_assoc();

 			echo "<h1>".$res1["name"]."</h1>";
 			echo "<p>".$res1["number"]."</p>";
 		}
 	?>
 </div>