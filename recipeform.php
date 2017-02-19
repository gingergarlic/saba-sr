<?php require('top.php'); ?>


<title>Submit a Secret Recipe</title>

<?php require('nav.php'); ?>


<div class="page-header">
	<h1 id="formtitle">Submit a Secret Recipe!</h1>
	<small>This page uses PHP to submit your entry into the Secret Recipe's MySQL database.</small>
</div>

<form id="recipe-form" method="post" action="recipesubmit.php">
	
	<div class="input-group">
		<span class="input-group-addon"></span>
		<input type="text" class="form-control" placeholder="Recipe English Name" name="recipeName" required>
		
	</div>

	<div class="input-group">
		<span class="input-group-addon"></span>
		<input type="text" class="form-control" placeholder="Recipe's Cultural Name" name="recipepName">
		
	</div>

	<div class="input-group">
		
		<input type="text" class="form-control" placeholder="Recipe Category" name="r_category">
		<span class="input-group-addon">Breads/Rice, Lentils, Curries, Seafood, Meat, Desserts</span>
	</div>

	<div class="input-group">
		
		<input type="text" class="form-control" placeholder="Ingredients" name="r_ingredients">
		<span class="input-group-addon">Separate Ingredients with ","</span>
	</div>

	<div class="input-group">
		<span class="input-group-addon"></span>
		<textarea class="form-control" placeholder="Description" name="r_description"rows="2"></textarea>
		
	</div>

	<div class="input-group">
		<span class="input-group-addon"></span>
		<textarea class="form-control" placeholder="Recipe" name="recipe" rows="5"></textarea>
		
	</div>

	<div class="input-group">
		<span class="input-group-addon">"www."</span>
		<input type="text" class="form-control" placeholder="Picture URL" name="r_picture">
		
	</div>

	<button type="submit" id="submit" class="btn btn-default">Submit</button>
</form>
	
</body>
</html>