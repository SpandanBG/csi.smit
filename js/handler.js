$(document).ready(function (){
	$(document).click(function(event){
        var clickover =$(event.target);
		var $navbar = $("#navBar");
		var _opened = $navbar.hasClass("in");
		if(_opened === true && !clickover.hasClass("navbar-toggle")){
			$navbar.collapse('hide');
		}
		var $navbar = $("#navBarSplit");
		var _opened = $navbar.hasClass("in");
		if(_opened === true && !clickover.hasClass("navbar-toggle")){   
			ntclm();
		}
    });
	function respond(){
		$('#content').css('padding-top',$('nav').height()+"px");
		$('#content').css('padding-bottom',$('#footer').height()+"px");
		$('.homefront').css('padding-top',$('nav').height()+ 50 +"px");
		if(window.matchMedia('(max-width: 767px)').matches){
			$('div.homefront span').css('font-size','1.35em');
		} else if(window.matchMedia('(min-width: 768px)').matches){
			$('div.homefront span').css('font-size','2em');
		}
	}
	function homefix(){
		var h1 = $('.homeback').height();
		var h2 = $('.homefront').height() + $('nav').height() + 50;
		if(h1>h2){
			$('.homemain').css('height',h1+'px');
		} else {
			$('.homemain').css('height',h2+'px');
		}
	}
	$(window).resize(function (){
		respond();
		homefix();
	});
	respond();
	homefix();
});