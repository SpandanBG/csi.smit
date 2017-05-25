<?php function home(){?>
<style>
.homemain{
	color: white;
}
div.homefront{
	position: absolute;
	top: 0;
	left: 25px;
	width: inherit;
}
div.homefront h1, div.homefront h3{
	margin: 0;
}
div.homefront span{
	background: black;
}
div.homefront h1 span{
	width: 100%;
	padding-bottom: 10px;
}
div.homefront h3 span{
	background: red;
}
</style>
<div class="homemain">
	<img class="homeback" src="/img/bak1.png" width=100%>
	<div class="homefront">
		<h3><span>22nd October, 2017</span></h3>
		<h1><span>CSI: State Student Convention<br>on Cloud and IOT</span></h1>
	</div>
</div>
<?php }?>