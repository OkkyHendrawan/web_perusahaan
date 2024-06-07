$(document).ready(function() {
    $('.contactForm').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'contactform.php',
            data: formData,
            success: function(response) {
                $('#sendmessage').html(response).show();
                $('.contactForm').trigger('reset');
            },
            error: function(xhr, status, error) {
                $('#errormessage').html("Terjadi kesalahan dalam mengirim pesan. Silakan coba lagi.").show();
            }
        });
    });
});
