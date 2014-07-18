$(function() {
	$(".slider-comment").hide();
	$("nav.header-menu ul").append("<li id=\"cursor\"></li>");
	var c = $("#cursor");

	var active = $("nav .current-menu-item a");
	if(active.length === 0) {
		active = $("nav li:first a");
	}

		c.css({
			left: active.position().left,
			width: $(active).width()
		});


	// $("nav.header-menu ul li:first-child").addClass("active");

	$("nav.header-menu a").hover(function() {
			c.stop(true).animate({
				left: $(this).position().left,
				width: $(this).width()
			});
	// c.css("left", this.offsetLeft + "px");
		});

	$("nav").mouseout(function(event) {
		if($("nav").is(":hover")) return false;
		// var active = $("nav .current-menu-item a");

		c.stop(true).animate({
			left: active.position().left,
			width: $(active).width()
		});

	});

	$("#pop").click(function(e) {
		if($(e.target).is("#pop")) {
			hidePopForm();
		}
	});

	$("#form-yet").click(function() {
		$(".form-files").append("<div class='fileform'>" + $(".fileform").html() + "</div>");
	});

	$(".box-for-production").each(function() {
		var text = $(this).find(".full-text")[0].innerHTML;
		text = text.substr(0, 150);
		 $(this).append(text);
	});

	var googleID;
	if(googleID = document.getElementById("googleMap")) {
		function initialize() {
			var mapProp = {
			  center:new google.maps.LatLng(55.1726258,30.1444336),
			  zoom: 15,
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			  };
			var map = new google.maps.Map(googleID, mapProp);

			var marker=new google.maps.Marker({
			  	position:new google.maps.LatLng(55.1726258, 30.1444336),
			  });

			marker.setMap(map);

		}

		google.maps.event.addDomListener(window, 'load', initialize);
	}


	$(".box-for-production .img").imgLiquid({fill:true});
	$(".production-full-text .img").imgLiquid({fill:true});


	$(".box-for-production").click(function() {
		var text = $(this).find(".full-text")[0].innerHTML;
		var img = $(this).find(".img")[0].innerHTML;
		$("#production-info").html(text);
		$(".production-full-text .img").html(img);
		$(".production-full-text .img").imgLiquid({fill:true});
		$(".box-for-production").removeClass("active-box-production");
		$(this).addClass("active-box-production");
	});

});


function showPopForm() {
	$("#pop").fadeIn(500);
}

function hidePopForm() {
	$("#pop").fadeOut(500);
}


function getName (str){
    if (str.lastIndexOf('\\')){
        var i = str.lastIndexOf('\\')+1;
    }
    else{
        var i = str.lastIndexOf('/')+1;
    }						
    var filename = str.slice(i);			
    var uploaded = document.getElementById("fileformlabel");
    uploaded.innerHTML = filename;
}