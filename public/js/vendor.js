$(document).ready(function() {
	$("#btn-news").on('click', function() {
		$.ajax({
            type: "get",
            url: '/news',
			data: {
            "name": "test"
            },
            async: 'false',
            cache: 'false',
            success: function(result) {
                
            }                       
        });
	});


	$("#btn-purchase").on('click', function() {
		$.ajax({
            type: "get",
            url: '/purchase',
                      
        });
	});

	$("#btn-trial").on('click', function() {
		$.ajax({
            type: "get",
            url: '/trial',
                     
        });
	});


})