
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


window.onload = function(){LoadTabScroll();}
window.onresize = function(){LoadTabScroll();}


//-------- load animation  ---------
$(window).on("load",function(){
		
    $('.animate').css({'transform' : 'rotate(-8640deg)'});
		
})
//-------- load animation  ---------


//-------- jquery code ---------
$(document).ready(function(){

	$("body").on("scroll", function () {
		
		
		var has_fired;
        
		/*--------animate skills---------
		if($(".copm").offset().top <= $(".copm").height())
		{
			$(".copm div div").show('slide', {direction: 'left'}, 800);
		}
		--------animate skills---------*/
		

		

		//--------change type transform---------
		var style = document.documentElement.appendChild(document.createElement("style"));
		if (!has_fired && $(this).scrollTop() >= $(".skills").offset().top) {
			style.sheet.insertRule("@keyframes rotation{0%{-webkit-transform:rotateY(0deg);} 100%{-webkit-transform:rotateY(-360deg)rotateX(-360deg)rotate(-360deg);}}", 0);
		}
		else{
			style.sheet.insertRule("@keyframes rotation{0%{-webkit-transform:rotateY(0deg);} 100%{-webkit-transform:rotateY(-360deg)}}", 0);
		}
		//--------change type transform---------
		
	});



});

 

