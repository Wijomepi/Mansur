$(document).ready(main);

var contador = 1;

function main(){
	$('.BT').click(function(){
		if(contador == 1){
			$('.ME').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('.ME').animate({
				left: '-100%'
			});
		}
	});

	$('.CAM').click(function(){
		$(this).children('.CAS').slideToggle();
	});

	$(".FI").click(function() {
	$(".AC").show("normal");
	$(".FI2").show();
	});

	$(".FI2").click(function() {
	$(".AC").hide("normal");
	$(".FI2").hide();
	});

	$('.CHE').click(function(){
		window.location='comprar.php';
	});


};