	<h1><?php echo $result['title'];?></h1>
	<img src="<?php echo $result['img'];?>" alt="<?php echo $result['title'];?>">
	<article>
	<?php echo $result['content'];?>
	</article>
	<?php echo $result['demotitle'];?>
	<?php echo $result['fulltext'];?>
	<?php echo $result['specification'];?>
	<?php echo $result['participants'];?>
	<?php echo date_format(date_create($result['date']), 'd.m.y');?>
	
	<?php
	if(isset($_SESSION["keys"]) and isset($_SESSION["login"])){ ?>
		<form method="post">
			<input name="login" type="hidden" value='<?$_SESSION['login'];?>'>
			<input name="nic" type="hidden" value='<?$_SESSION['nicgame'];?>'>
			<input class="button" name="run" type="submit" value="Участвовать">
			</form>
	<?}?>