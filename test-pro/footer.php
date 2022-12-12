<?php wp_footer();?>

<script>
// key press ajax filter //
// /// ajax filter // 

$( document ).ready(function() {

	alert("dfjyfd")
	
    $("#location").keyup(function() {
        $.ajax({
            url: 'http://192.168.0.77/sidharth/Trial_version/wp-admin/admin-ajax.php',
            type: 'post',
            data: { action: 'data_fetch', keyword: $('#keyword').val() },
            success: function(data) {
                var datas = $(data);
                if (datas.length > 0) {
                    if ($("#keyword").val().length > 1) {
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
	
	
});
</script>