function doOnMouseOver(myObj) {
	if (typeof console == "object") {
		console.log("A 'mouseover' event occured"); 
		console.log(myObj);
	}
	update("photos/carlcoffee2.jpg");
	}
	
function doOnMouseOut(myObj) {
	if (typeof console == "object") {
		console.log("A 'mouseout' event occured"); 
		console.log(myObj);
	} 
	update("photos/Carlcoffee.jpg");
}

function update(img) {
    document.getElementById('mainphoto').src = img;
}

