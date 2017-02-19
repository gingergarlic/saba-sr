<div id="footer">

<div class="panel panel-default">
  <div class="panel-body">
		Last revised: 
		<?php
		putenv("TZ=America/Los_Angeles");
		echo date("m/d/y", filemtime($_SERVER["SCRIPT_FILENAME"]));
		?>
  </div>
</div>


</div>

</body>
</html>