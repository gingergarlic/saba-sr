<?php require('top.php'); ?>

<?php require('nav.php'); ?>





<?php
$link = mysqli_connect("localhost", "root", "admin", "sbRecipe");

$id = $_GET['id'];
$id = basename($id, '.php');
//Remove LIMIT 1 to show/do this to all results.
$sql = "SELECT recipeName, recipepName, r_category, r_ingredients, r_description, recipe, r_picture, r_date 
		FROM Recipes
		WHERE recipe_id = '$id'";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        $id = $row["recipe_id"];
    	$name = $row["recipeName"];
    	$pname = $row["recipepName"];
    	$cat = $row["r_category"];
    	$desc = $row["r_description"];
    	$pic = $row["r_picture"];
    	$recipe = $row["recipe"];
    	$date = $row["r_date"];
    	$ingredients = $row["r_ingredients"];
    	$i_array = explode(",",$ingredients);
    	$re = '/(\d+)\.\s/';
    	$r_array = preg_split($re, $recipe);


		// Echo page content
			echo "<div class=\"row\"><div class=\"col-xs-6\"><div class=\"panel panel-default\"><div class=\"panel-heading\"><img src=\"" 
			. $pic . "\"> <h3 id=\"recipe_title\">" . $name . ", " . $pname . "</h3> <p id=\"recipe_desc\">"
				. $desc . "</p></div>";

		//Echo ingredients table
			echo "<table class=\"table\" id=\"i_table\"><tr>
		    	<td><p><strong>Ingredients</strong></p></td>
		    	</tr>";

	    for ($i = 0; $i < sizeOf($i_array); $i++)
	    {
	    echo "<tr><td>" . $i_array[$i] . "</td></tr>";
		}


		echo "</table></div></div><div class=\"col-xs-6\">
			<div id=\"recipe_panel\" class=\"panel panel-default\"><div class=\"panel-heading\">
			<h3 id=\"recipe_title\">Recipe</h3></div><table class=\"table\">";
		
		for ($j = 1; $j < sizeOf($r_array); $j++)
		{	
				echo "<tr><td>". $j . ". " . $r_array[$j] . "</td></tr>";
		}

		echo "</table></div></div>";
    }





} else {
    echo "0 results";
}
	
?>
<!-- <div class="panel panel-default"> 
  <div class="panel-heading">
	<h3 id="recipe_title">Recipe</h3>
	<p id="recipe_desc">My mother's Masoor Dal has been a staple in my upbringing. 
	Originally pink when raw, but yellow when cooked, this salty and savory lentil dish is served best with rice, 
	something crunchy, and a side of meat!</p>
  </div>

  <table class="table" id="i_table">
    <tr>
    	<td><p><strong>Ingredients</strong></p></td>
    </tr>
    <tr>
    	<td>1 Cup Masoor Dal</td>
    </tr>
    <tr>
    	<td>1 Cup Water</td>
    </tr>
  </table>
</div>
-->