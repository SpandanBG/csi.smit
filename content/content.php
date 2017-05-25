<?php 
include 'home.php';
include 'about.php';
include 'events.php';
include 'news.php';
include 'register.php';
include 'details.php';

function content(){?>
<div class="container-fluid" style="padding: 0">
	<div id="home"><?php echo home();?></div>
	<div id="about"><?php echo about();?></div>
	<div id="events"><?php echo events();?></div>
	<div id="news"><?php echo news();?></div>
	<div id="register"><?php echo register();?></div>
	<div id="details"><?php echo details();?></div>
</div>
<?php }?>