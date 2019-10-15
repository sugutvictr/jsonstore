function calldata() {

$.getJSON("fetch.php", function(data) {

	$("ul").empty();
	$.each(data.result, function(){
		$("ul").append("<li> Fkey: " + this['fkey']+"</li><li> Email: " + this['email']+"</li><li> Pw: " + this['pw'] +"</li> <br />");
	});
});
	};