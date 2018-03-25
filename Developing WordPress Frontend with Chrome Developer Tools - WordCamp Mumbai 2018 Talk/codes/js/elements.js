$( document ).ready(function() {
    
	$( "#cta-link" ).click(function( event ) {
    	// Event Listner
    	alert( "Hello user, you just clicked CTA Button" );

    	// Breakpoints
    	 $( ".topnav" ).css("background","red");
	});

});