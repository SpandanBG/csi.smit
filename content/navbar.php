<?php function navbar(){?>
<style>
.navMenu{
	text-align: center;
}
</style>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBar">
							<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
						</button>
						<img src="/img/logo_1.png" width=inherit height=50px id="navlogo">
						<a class="navbar-brand" href="#" id="navname">CSI.SMIT</a>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="row collapse navbar-collapse" id="navBar">
						<div class="col-sm-12">
							<ul class="nav navbar-nav navbar-right navMenu">
								<li><a href="#home">HOME</a></li>
								<li><a href="#about">ABOUT</a></li>
								<li><a href="#events">EVENTS</a></li>
								<li><a href="#news">NEWS</a></li>
								<li><a href="#register">REGISTER</a></li>
								<li><a href="#details">DETAILS</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
	</div>
</nav>
<?php }?>