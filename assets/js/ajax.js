jQuery(document).ready(function ($) {
    // Example AJAX request on button click
    $('#ajax-button').on('click', function (e) {
        e.preventDefault();

        // Data to send to the server
        let requestData = {
            action: 'attributes_canva_action', // Action name matching the PHP handler
            security: attributesAjax.nonce, // Pass the nonce for security
            data: 'Hello, server!' // Example data
        };

        // Make the AJAX request
        $.post(attributesAjax.ajax_url, requestData, function (response) {
            if (response.status === 'success') {
                alert(response.message + ' Data: ' + response.data);
            } else {
                alert('An error occurred.');
            }
        });
    });
});
