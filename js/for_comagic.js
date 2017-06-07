
/*$(document).ready(function() {
 $(".es19__copyr").after("<div  class='es19__copyr'><a href='http://gaev.by' style='color:#000'>Создание сайтов окна, двери</div>");
});*/


// comagic form start

$( ".comagic_phone" ).on( "click", function() {
	var newComagicPhone = $('.comagic_phone').html();		  
	$( ".comagic_phone" ).parent("a").attr( "href", "tel:"+newComagicPhone+"" );
});

/*
// add new tel in href after replace
function comagicPhoneReplaceInHref() {
  var newComagicPhone = $('.comagic_phone').html();		  
  $( ".comagic_phone" ).parent("a").attr( "href", "tel:"+newComagicPhone+"" );
}
setTimeout(comagicPhoneReplaceInHref, 2000);
*/



//template_ceo
$('#b_contact_ceo_but260').click(function()
{	
	var template_name=$('#name').val();
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
						
		setTimeout(function () {
			jQuery('.b_contact_ceo_form form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});	

$('#b_contact_ceo_but').click(function()
{	
		var template_name=$('#name').val();
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
				
		setTimeout(function () {
			jQuery('.b_contact_ceo_form form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});	


//template_kupitdeshevle	
$('#modal_hochu_but').click(function()
{	
		var template_name=$('#name').val();
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
			
		setTimeout(function () {
			jQuery('.modal_hochu_but form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});	


//template_otdelka
$('#template_otdelka_but').click(function()
{	
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
				
		setTimeout(function () {
			jQuery('.calc_otdelka__right_2 form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});

$('#phone').keypress(function(e) {
    if(e.which == 13) {  //Enter is key 13	
		var template_tel=$('#phone').val();
		if (template_tel) {
			$("#loader-wrapper").css("display","block");
				
			setTimeout(function () {
				jQuery('.calc_otdelka__right_2 form').submit();
			}, 1000); // ����� � ��
		}
		else {
			$('#phone').focus();
		}
		return false;
	}
});

$('#template_otdelka_but260').click(function()
{	
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
				
		setTimeout(function () {
			jQuery('.calc_otdelka__right_2 form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});	


//template_perezv5min	
$('#template_perezv5min').click(function()
{	
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
				
		setTimeout(function () {
			jQuery('.es17_blockbg form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});

$('#phone').keypress(function(e) {
    if(e.which == 13) {  //Enter is key 13	
		var template_tel=$('#phone').val();
		if (template_tel) {
			$("#loader-wrapper").css("display","block");
					
			setTimeout(function () {
				jQuery('.es17_blockbg form').submit();
			}, 1000); // ����� � ��
		}
		else {
			$('#phone').focus();
		}
		return false;
	}
});

$('#template_perezv5min260').click(function()
{	
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
				
		setTimeout(function () {
			jQuery('.es17_blockbg form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});


//template_poeskizu	
$('#template_poeskizu_but').click(function()
{	
		var template_name=$('#name').val();
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
			
		setTimeout(function () {
			jQuery('.es4_bg form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});	


//template_smsskidka	
$('#template_smsskidka_but').click(function()
{	
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
			
		setTimeout(function () {
			jQuery('.b-sms_bg form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});	

$('#phone').keypress(function(e){
    if(e.which == 13){  //Enter is key 13
        var template_tel=$('#phone').val();
		if (template_tel) {
			$("#loader-wrapper").css("display","block");
				
			setTimeout(function () {
				jQuery('.b-sms_bg form').submit();
			}, 1000); // ����� � ��
		}
		else {
			$('#phone').focus();
		}
		
		return false;
    }
});




//template_za5min	
$('#template_za5min_but').click(function()
{	
		var template_name=$('#name').val();
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
			
		setTimeout(function () {
			jQuery('.es8_form form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});	

$('#template_za5min_but260').click(function()
{	
		var template_name=$('#name').val();
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
				
		setTimeout(function () {
			jQuery('.es8_form form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});	


//template_zafixtsenu	
$('#template_zafixtsenu_but').click(function()
{	
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
				
		setTimeout(function () {
			jQuery('.es13_bg form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});

$('#phone').keypress(function(e){
    if(e.which == 13){  //Enter is key 13	
		var template_tel=$('#phone').val();
		if (template_tel) {
			$("#loader-wrapper").css("display","block");
					
			setTimeout(function () {
				jQuery('.es13_bg form').submit();
			}, 1000); // ����� � ��
		}
		else {
			$('#phone').focus();
		}
		return false;
	}
});

$('#template_zafixtsenu_but260').click(function()
{	
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
				
		setTimeout(function () {
			jQuery('.es13_bg form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});	


//template_zakaz	
$('#template_zakaz_but').click(function()
{	
		var template_name=$('#name').val();
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
				
		setTimeout(function () {
			jQuery('.b_market_item_form_bg form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});

$('#template_zakaz_but260').click(function()
{	
		var template_name=$('#name').val();
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
					
		setTimeout(function () {
			jQuery('.b_market_item_form_bg form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});


//template_zhdu	
$('#template_zhdu_but').click(function()
{	
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
				
		setTimeout(function () {
			jQuery('.b_contact_zhdu_bg form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});

$('#phone').keypress(function(e) {
    if(e.which == 13) {  //Enter is key 13	
		var template_tel=$('#phone').val();
		if (template_tel) {
			$("#loader-wrapper").css("display","block");
					
			setTimeout(function () {
				jQuery('.b_contact_zhdu_bg form').submit();
			}, 1000); // ����� � ��
		}
		else {
			$('#phone').focus();
		}
		return false;
	}
});


//template_happy
$('#happy_but').click(function()
{	
		var template_name=$('#name').val();
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
				
		setTimeout(function () {
			jQuery('.modal_form_happy form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});



//template_zamer	
$('#template_zamer_but').click(function()
{	
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
				
		setTimeout(function () {
			jQuery('.butzamer form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});	

$('#phone').keypress(function(e){
    if(e.which == 13) {  //Enter is key 13
		var template_tel=$('#phone').val();
		if (template_tel) {
			$("#loader-wrapper").css("display","block");
					
			setTimeout(function () {
				jQuery('.butzamer form').submit();
			}, 1000); // ����� � ��
		}
		else {
			$('#phone').focus();
		}
		return false;
	}
});


$('#template_zamer_but_260').click(function()
{	
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
			
		setTimeout(function () {
			jQuery('.butzamer form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});	
	


//template_ceo
$('#template_otzivy_but_260').click(function()
{	
	var template_name=$('#name').val();
	
		$("#loader-wrapper").css("display","block");
				
		setTimeout(function () {
			jQuery('.es1_otzivy__form_bg form').submit();
		}, 1000); // ����� � ��
});	

$('#template_otzivy_but').click(function()
{	
	var template_name=$('#name').val();
	
		$("#loader-wrapper").css("display","block");
				
		setTimeout(function () {
			jQuery('.es1_otzivy__form_bg form').submit();
		}, 1000); // ����� � ��
	
});	



//template_gift	
$('#gift_but').click(function()
{	
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
				
		setTimeout(function () {
			jQuery('.modal_form_gift form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});	

$('#phone').keypress(function(e) {
    if(e.which == 13) {  //Enter is key 13	
		var template_tel=$('#phone').val();
		if (template_tel) {
			$("#loader-wrapper").css("display","block");
					
			setTimeout(function () {
				jQuery('.modal_form_gift form').submit();
			}, 1000); // ����� � ��
		}
		else {
			$('#phone').focus();
		}
		return false;
	}
});

$('#gift_but260').click(function()
{	
	var template_tel=$('#phone').val();
	if (template_tel) {
		$("#loader-wrapper").css("display","block");
	
		setTimeout(function () {
			jQuery('.modal_form_gift form').submit();
		}, 1000); // ����� � ��
	}
	else {
		$('#phone').focus();
	}
});	
	



// comagic form end	