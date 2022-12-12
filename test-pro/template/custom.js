  /// ajax filter // 
$( document ).ready(function() {

	
// 	alert("khasdjsd")
	
// 	alert("dsjdhs");
 /// ajax filter // 


    $("#location").keyup(function() {
        $.ajax({
            url: 'http://122.160.61.100/dev/nk/test_prohject/wp-admin/admin-ajax.php',
            type: 'post',
            data: { action: 'data_fetch', keyword: $('#location').val() },
            success: function(data) {
			
                var datas = $('#datafetch').html(data);
				var vaa =  $('#location').val();
				console.log(vaa)
				console.log(datas)
                if (datas ) {
                    if ($("#location").val().length > 1) {
                        // $length = 
                        $('#datafetch').html(data);
                    } else {
                        $('#datafetch').html('');
                    }
                } else {
                    $('#datafetch').html('Not any data Found');
                }
            }
        });
    });


$(document).on('click', '.location', function() {
    	  
		
		 var adat =   $(this).html();
// 		 alert(adat)
	$('#location').val(adat)
										  });
					  
});
	
