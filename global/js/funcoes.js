jQuery(document).ready(function($) {
  $('.banner').slick();

  $(".input-pesquisa").keyup(function(){
		var texto = $(this).val();

		$(".col-md-6").css("display", "block");
		$(".col-md-6").each(function(){
			if($(this).text().indexOf(texto) < 0)
			   $(this).css("display", "none");
		});
	});


});
