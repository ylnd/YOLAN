<section>
	<h1><?php echo $judul ?></h1>
		<form>
			<textarea style="height: 200px; width: 100%;" name="textarea"></textarea>
			<input type="submit" value="WRITE" style="height: 40px; color: ffffff; background: red; font-weight: bold;">
		</form>

		<?php
			if(isset($_GET['textarea'])){
				echo($_GET['textarea']);
			};

			?>
</section>