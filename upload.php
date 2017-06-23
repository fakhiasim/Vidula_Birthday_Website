<?php
include ("header.php");
?>
<div class="contaner">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<h1 class="page-header">Upload a new Image</h1>
				<form action="uploadphp.php" enctype="multipart/form-data" id="form" method="post" name="form">
				<select name="tabname" class="form-control">
					<option value="vidhula">vidhula</option>
					<option value="vjphoto">vjphoto</option>
					<option value="nawra">nawra</option>
					<option value="jr">jr</option>
					<option value="sr">sr</option>
				</select>
				<input type="file" name="image" class="form-control">
				<button type="submit" class="btn" name="submit">Upload to Database</button>
				</form>
					<div id="detail">
					<b>Note:</b>
					<ul>
					<li>To Choose file Cli0ck on folder.</li>
					<li>You can upload- <b>images(jpeg,jpg,png).</b></li>
					<li>Image should be less than 100kb in size.</li>
					</ul>
					</div>
				</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>

<!--footer-->
<footer>
	<div class="container" id="container_footer">
		<div class="row">
			<p id="copyright_text" class="col-sm-6">&copy; copyright 2017.<br>designed and developed by <a href="asimfakhi.tk/">Asim Fakhi</a></p>
		</div>
	</div>
</footer>
</body>
</html>