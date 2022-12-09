$(document).ready(function(){
 initMenu();
});

function initMenu() {

$('#menu ul').hide();
$('#menu ul:eq(3)').show();
$('#menu li a.deactive:eq(3)').addClass('active');

$('#menu').each(function () {
 var $toggle = $(this);
 $('li a', $toggle).not("ul li ul a").click(function () {
 if($(this).hasClass('active')){
 $(this).removeClass("active");
 } else{
 $('li a').removeClass('active');
 $(this).addClass('active');
 }
 });
});

$('#menu li a').click(function() { 
 var iselemnt = $(this).next();
 
 if((iselemnt.is('ul')) && (iselemnt.is(':visible'))) {
 iselemnt.slideUp('normal');

 return false;
 }

 if((iselemnt.is('ul')) && (!iselemnt.is(':visible'))) {
 $('#menu ul:visible').slideUp('normal');
 iselemnt.slideDown('normal');

 return false;
 }
});

}

$(".arrow-4").click(function() {
    $(this).toggleClass("open");
});