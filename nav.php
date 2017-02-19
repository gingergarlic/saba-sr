</head>

<style>
	img{
		height: 200px;
		width: 200px;
   border:1px solid #021a40;
   border-style: ridge;
   display: inline-block;
	}
	.top{
		margin-bottom: 5px;
	}
	.page-header{
		padding-left: 25px;
	}
	.panel{
		width: 100%;
		margin: 25px;

	}
	.media-object
	{
		height: 64px;
		width: 64px;
	}
	.media
	{
		padding-left: 25px;
		width: 80%;
	}
	#footer
	{
		margin: 25px;
	}
	#hometitle
	{
		padding-left: 25px;
	}
	#submit{
		margin-top: 5px;
	}
	#recipes-header{
		margin: 20px;	
	}
	#recipe_panel{
		width: 90%;
	}
	.input-group
	{
		padding-top: 7px;
	}

	#recipe-form{
		padding-left: 25px;
		width: 60%;
	}
	#formtitle{
		margin-top: 10px;
	}
</style>
<body>

<div class="top">
<ul class="nav nav-tabs nav-justified">
	<a class="navbar-brand" href="home.php">Saba's Secret Recipes</a>
 <li class="<?= ($activePage == 'home') ? 'active':''; ?>"><a href="home.php">Home</a></li>
 <li class="<?= ($activePage == 'submit') ? 'active':''; ?>"><a href="submit.php">Submit</a></li>
 <li class="<?= ($activePage == 'recipes') ? 'active':''; ?>"><a href="recipes.php">Recipes</a></li>
 <li class="<?= ($activePage == 'tutorials') ? 'active':''; ?>"><a href="ingredients.php">Ingredients</a></li>
</ul>
</div>

 