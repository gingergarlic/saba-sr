<?php require('top.php'); ?>
<title>All Recipes</title>

<?php require('nav.php'); ?>


<div id="recipes-header"class="page-header">
  <h1>Saba's Secret Recipes</h1>
  <small>We hope you enjoy the dishes below, don't forget to share with your friends and family!</small>
</div>


<?php
$link = mysqli_connect("localhost", "root", "admin", "sbRecipe");


// Check connection


$sql = "SELECT recipe_id, recipeName, recipepName, r_category, r_description, r_picture FROM Recipes";
$result = mysqli_query($link, $sql);




if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$id = $row["recipe_id"];
    	$name = $row["recipeName"];
    	$pname = $row["recipepName"];
    	$cat = $row["r_category"];
    	$desc = $row["r_description"];
    	$pic = $row["r_picture"];
        echo "<div class=\"media\"> <div class=\"media-left\"> <a href=\"recipe_id" 
        . $id . ".php\"> <img class=\"media-object\" src=\""
        . $pic . "\"></a></div>  <div class=\"media-body\"> <a href=\"recipe.php?id="
        . $id . ".php\"> <h4 class=\"media-heading\"> " 
        . $name . ", " . $pname. "</h4></a>" . $desc . "</div></div>";
    }
} else {
    echo "0 results";
}
$conn->close();

?> 



<?php require('bottom.php'); ?>