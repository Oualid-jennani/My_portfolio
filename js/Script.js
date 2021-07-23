
var txtCmd = document.getElementById("txtCmd");

txtCmd.onchange = function(){
    this.style.width = ((this.value.length + 1) * 8) + 'px';
}
txtCmd.onkeyup = function(){
    this.style.width = ((this.value.length + 1) * 8) + 'px';
}
txtCmd.onblur = function(){
    this.focus();
}


txtCmd.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        //code
    }
});

var tabScroll = ["color","Language","contact","clear","refresh","exit"];



var submit_btn = document.getElementById("submit_btn");

var nom = document.getElementById("name");
var email = document.getElementById("email");
var subject = document.getElementById("subject");
var message = document.getElementById("message");

var info_send = document.getElementById("info-send");





nom.onclick = function(){

	if(this.classList.contains("Invalid")){
		this.value = "";
		this.classList.remove("Invalid");
	}
	
}

email.onclick = function(){
	if(this.classList.contains("Invalid")){
		this.value = "";
		this.classList.remove("Invalid");
	}
}

subject.onclick = function(){
	if(this.classList.contains("Invalid")){
		this.value = "";
		this.classList.remove("Invalid");
	}
}

message.onclick = function(){
	if(this.classList.contains("Invalid")){
		this.value = "";
		this.classList.remove("Invalid");
	}	
}

function clear(){nom.value = "";email.value = "";subject.value = "";message.value = "";}

submit_btn.onclick = function() {
	info_send.innerHTML = "";
	var Test = true;
	
	var textReg = /\S+/g;
    var emailReg = /^\S+@\S+.\S+$/;

    if (nom.value == "" || !(nom.value).match(textReg) || nom.classList.contains("Invalid")) {
        nom.value = "Please fill the required field.";
        if(!nom.classList.contains("Invalid")){nom.className +=" Invalid";}
		Test = false;
    }
	
	if (email.value == "") {
        email.value = "Please fill the required field.";
        email.className +=" Invalid";
		Test = false;
    }
    else if (!(email.value).match(emailReg) || email.classList.contains("Invalid")) {
        email.value = "Email address seems invalid.";
        if(!email.classList.contains("Invalid")){email.className +=" Invalid";}
		Test = false;
    }
	
    if (subject.value == "" || !(subject.value).match(textReg) || subject.classList.contains("Invalid")) {
        subject.value = "Please fill the required field.";
        if(!subject.classList.contains("Invalid")){subject.className +=" Invalid";}
		Test = false;
    }

	if (message.value == "" || !(message.value).match(textReg) || message.classList.contains("Invalid")) {
        message.value = "Please fill the required field.";
        if(!message.classList.contains("Invalid")){message.className +=" Invalid";}
		Test = false;
    }
	
	if(Test){
		
		$.post('PostPage.php',{name:nom.value,email:email.value,subject:subject.value,message:message.value},function(data){info_send.innerHTML = data;clear();});
		/*
		var data = {name:nom.value,email:email.value,subject:subject.value,message:message.value};
		$.ajax({
			url: "index.php",
			data: data,
			cache: false,
			contentType: false,
			processData: false,
			method: 'POST',
			type: 'POST',
			success: function (data) {
				info_send.innerHTML = "<span class='success'>&#10004; Message success thanks</span>";
				clear();
			},
			error: function () {
				info_send.innerHTML = "<span class='warning'>&#9888; Message wrong !!! Please try again</span>";
			}
		});
		*/
	}


}


var tabScroll = [];

//-------- function change offset top scroll---------
function LoadTabScroll(){
	
	tabScroll = [];
	tabScroll.push(document.getElementById("home").offsetTop);
	tabScroll.push(document.getElementById("about").offsetTop);
	tabScroll.push(document.getElementById("skills").offsetTop);
	tabScroll.push(document.getElementById("services").offsetTop);
	tabScroll.push(document.getElementById("portfolio").offsetTop);
	tabScroll.push(document.getElementById("blog").offsetTop);
	tabScroll.push(document.getElementById("contact").offsetTop);
	
}
//-------- function change offset top scroll---------


window.onload = function(){
	LoadTabScroll();
}
window.onresize = function(){LoadTabScroll();}


//-------- load animation  ---------
$(window).on("load",function(){
		
	$(".loading").fadeOut(500);
	
	$('.animate').animate({top:'0px'},500,function(){

		$('.rotate2 .item').animate({width : '197px'},0);
		$('.rotate2 .item').animate({height : '100%'},800,function(){
			
			$('.rotate2').css("-webkit-animation","rotation 30s infinite");
			$('.rotate2').css("-webkit-animation-timing-function","linear");
			$('.rotate2').css("-webkit-transform-origin","center");

		});

		$('.pole').animate({height : '110%'},1000,function(){

			$('.mainSlide').css({'background-size' : '101% 100%'});
			$('.pole').animate({'width' : '10px'},200,function(){$('.pl').show(1500);});
		})

	});
    	
})
//-------- load animation  ---------


//-------- jquery code ---------
$(document).ready(function(){
    
    
    
    
    $( ".window-command" ).draggable({cancel : '.ligne-command,.dot'});
	
	
	$('.footer-link,.nav-link,#Talk,.topWindow,.navbar-brand,.infoApp a').click(function(){

		$('html,body').animate({			
			scrollTop:""+tabScroll[$(this).data('value')]
		},1000)
		
		$(".navbar-collapse").removeClass("show");
		
	});
	
	

	$("body").on("scroll", function () {
        
        var has_fired;
		
		//--------show header---------
		if (!has_fired && $(this).scrollTop() >= $(".home").offset().top + 150)
		{
			$("header").fadeIn(500);
            $(".topWindow").fadeIn(500);
            //$("header").slideDown(500);
		}
		else{
			$("header").fadeOut(500);
            $(".topWindow").fadeOut(500);
            //$("header").slideUp(500);
		}
		//--------show header---------
		$(".navbar-collapse").removeClass("show");
		
		
		//--------change class active---------
		
		if (!has_fired && $("#contact").offset().top <= 50)
		{
			$(".navbar-nav li").removeClass("active");
			$(".navbar-nav li:nth-child(7)").addClass("active");
		}
		else if(!has_fired && $("#blog").offset().top <= 50)
		{
			$(".navbar-nav li").removeClass("active");
			$(".navbar-nav li:nth-child(6)").addClass("active");
		}
		else if(!has_fired && $("#portfolio").offset().top <= 50)
		{
			$(".navbar-nav li").removeClass("active");
			$(".navbar-nav li:nth-child(5)").addClass("active");
		}
		else if(!has_fired && $("#services").offset().top <= 50)
		{
			$(".navbar-nav li").removeClass("active");
			$(".navbar-nav li:nth-child(4)").addClass("active");
		}
		else if(!has_fired && $("#skills").offset().top <= 50)
		{
			$(".navbar-nav li").removeClass("active");
			$(".navbar-nav li:nth-child(3)").addClass("active");
		}
		else if(!has_fired && $("#about").offset().top <= 50)
		{
			$(".navbar-nav li").removeClass("active");
			$(".navbar-nav li:nth-child(2)").addClass("active");
		}
		else if(!has_fired && $("#home").offset().top <= 50)
		{
			$(".navbar-nav li").removeClass("active");
			$(".navbar-nav li:nth-child(1)").addClass("active");
		}
		//--------change class active---------
		

		
	});

    

	
    $('#change-coleur').click(function(){
        $('.bg-color-items,.lang').fadeToggle(1000);
    })

	
	//--------change color---------
    $('#bg-blue').click(function(){
        document.documentElement.style.setProperty('--main-bg-color', "#0078ff");
		document.documentElement.style.setProperty('--shadow-color', "#0078ffd4");
		
		document.documentElement.style.setProperty('--slider1', "url(../img/slider/slider1/1.svg)");
		document.documentElement.style.setProperty('--slider2', "url(../img/slider/slider1/2.svg)");
		document.documentElement.style.setProperty('--slider3', "url(../img/slider/slider1/3.svg)");
		document.documentElement.style.setProperty('--slider4', "url(../img/slider/slider1/4.svg)");
		document.documentElement.style.setProperty('--slider5', "url(../img/slider/slider1/5.svg)");
		document.documentElement.style.setProperty('--slider6', "url(../img/slider/slider1/6.svg)");
		
		//document.documentElement.style.setProperty('--photo-profil', "url(../img/walid-user-1.jpg)");
		
		$('.bg').css({'display' : 'block'});
		$(this).css({'display' : 'none'});
		$('.bg-color-items,.lang').fadeToggle(1000);
        
        $.post('PostPage.php',{color:"blue"},function(data){});
    })

	$('#bg-green').click(function(){
        document.documentElement.style.setProperty('--main-bg-color', "#94c728");
		document.documentElement.style.setProperty('--shadow-color', "#94c728c4");
		
		document.documentElement.style.setProperty('--slider1', "url(../img/slider/slider2/1.svg)");
		document.documentElement.style.setProperty('--slider2', "url(../img/slider/slider2/2.svg)");
		document.documentElement.style.setProperty('--slider3', "url(../img/slider/slider2/3.svg)");
		document.documentElement.style.setProperty('--slider4', "url(../img/slider/slider2/4.svg)");
		document.documentElement.style.setProperty('--slider5', "url(../img/slider/slider2/5.svg)");
		document.documentElement.style.setProperty('--slider6', "url(../img/slider/slider2/6.svg)");
		
		//document.documentElement.style.setProperty('--photo-profil', "url(../img/walid-user-2.jpg)");
		$('.bg').css({'display' : 'block'});
		$(this).css({'display' : 'none'});
		$('.bg-color-items,.lang').fadeToggle(1000);
        
        $.post('PostPage.php',{color:"green"},function(data){});
    })
	$('#bg-violet').click(function(){
        document.documentElement.style.setProperty('--main-bg-color', "#E80CE7");
		document.documentElement.style.setProperty('--shadow-color', "#E80CE7c4");
		
		document.documentElement.style.setProperty('--slider1', "url(../img/slider/slider3/1.svg)");
		document.documentElement.style.setProperty('--slider2', "url(../img/slider/slider3/2.svg)");
		document.documentElement.style.setProperty('--slider3', "url(../img/slider/slider3/3.svg)");
		document.documentElement.style.setProperty('--slider4', "url(../img/slider/slider3/4.svg)");
		document.documentElement.style.setProperty('--slider5', "url(../img/slider/slider3/5.svg)");
		document.documentElement.style.setProperty('--slider6', "url(../img/slider/slider3/6.svg)");
		
		//document.documentElement.style.setProperty('--photo-profil', "url(../img/walid-user-3.jpg)");
		$('.bg').css({'display' : 'block'});
		$(this).css({'display' : 'none'});
		$('.bg-color-items,.lang').fadeToggle(1000);
        
        $.post('PostPage.php',{color:"violet"},function(data){});
    })
	$('#bg-black').click(function(){
        document.documentElement.style.setProperty('--main-bg-color', "#4a4b4c");
		document.documentElement.style.setProperty('--shadow-color', "#4a4b4cd4");
		
		document.documentElement.style.setProperty('--slider1', "url(../img/slider/slider4/1.svg)");
		document.documentElement.style.setProperty('--slider2', "url(../img/slider/slider4/2.svg)");
		document.documentElement.style.setProperty('--slider3', "url(../img/slider/slider4/3.svg)");
		document.documentElement.style.setProperty('--slider4', "url(../img/slider/slider4/4.svg)");
		document.documentElement.style.setProperty('--slider5', "url(../img/slider/slider4/5.svg)");
		document.documentElement.style.setProperty('--slider6', "url(../img/slider/slider4/6.svg)");
		
		//document.documentElement.style.setProperty('--photo-profil', "url(../img/walid-user-4.jpg)");
		$('.bg').css({'display' : 'block'});
		$(this).css({'display' : 'none'});
		$('.bg-color-items,.lang').fadeToggle(1000);
        
        $.post('PostPage.php',{color:"black"},function(data){});
    })
    
    $('#bg-turquoise').click(function(){
        document.documentElement.style.setProperty('--main-bg-color', "#20BAC5");
		document.documentElement.style.setProperty('--shadow-color', "#20BAC5D4");
		
		document.documentElement.style.setProperty('--slider1', "url(../img/slider/slider5/1.svg)");
		document.documentElement.style.setProperty('--slider2', "url(../img/slider/slider5/2.svg)");
		document.documentElement.style.setProperty('--slider3', "url(../img/slider/slider5/3.svg)");
		document.documentElement.style.setProperty('--slider4', "url(../img/slider/slider5/4.svg)");
		document.documentElement.style.setProperty('--slider5', "url(../img/slider/slider5/5.svg)");
		document.documentElement.style.setProperty('--slider6', "url(../img/slider/slider5/6.svg)");
		
		//document.documentElement.style.setProperty('--photo-profil', "url(../img/walid-user-1.jpg)");
		
		$('.bg').css({'display' : 'block'});
		$(this).css({'display' : 'none'});
		$('.bg-color-items,.lang').fadeToggle(1000);
        
        $.post('PostPage.php',{color:"turquoise"},function(data){});
    })
    
	//--------change color---------
	
	
	//-------- portfolio ---------
	$(".popup").click(function () {
		var $this = $(this);
		$(".ifram-video").fadeIn(500)
		$(".v-iframe").attr("src", $this.data("link"));
	});

	$(".btn-close").click(function () {
		var $this = $(this);
		$(".ifram-video").fadeOut(500)
		$(".v-iframe").attr("src","");
	});
	
	$(".ifram-content").click(function () {
		var $this = $(this);
		$(".ifram-video").fadeOut(500)
		$(".v-iframe").attr("src","");
	});
	//****************************************
	$(".popup-img").click(function () {
		var $this = $(this);
		$(".portfolioImg-img").fadeIn(500)
		$(".p-img").attr("src", $this.data("link"));
	});

	$(".btn-img-close").click(function () {
		var $this = $(this);
		$(".portfolioImg-img").fadeOut(500)
		$(".p-img").attr("src","");
	});
	
	$(".portfolioImg-content").click(function () {
		var $this = $(this);
		$(".portfolioImg-img").fadeOut(500)
		$(".p-img").attr("src","");
	});
	//-------- portfolio ---------
	

	//-------- blog ---------
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        //nav:true,
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],

        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
	//-------- blog ---------
	
	//-------- change offset top scroll---------
	LoadTabScroll();
	//-------- change offset top scroll---------
    
});

 

