/**
*
* -----------------------------------------------------------------------------
*
* Template : Reobiz - Consulting Business HTML Template
* Author : rs-theme
* Author URI : http://www.rstheme.com/
*
* -----------------------------------------------------------------------------
*
**/

function submitContactForm() {
    'use strict';
    // Get the form.
    var form = $('#contact-form');

    // Initialize
    form.validate();
    // Get the messages div.
    var formMessages = $('#form-messages');

    /*// Set up an event listener for the contact form.
    $(form).submit(function(e) {*/
        // Stop the browser from submitting the form.
        // e.preventDefault();

        // Serialize the form data.
        var formData = $(form).serialize();

    if(form.valid()) {

        var submitBtn = $('#submit-btn');
        submitBtn.attr('disabled', 'true');

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
        .done(function(response) {
            // Make sure that the formMessages div has the 'success' class.
            $(formMessages).removeClass('alert-danger');
            $(formMessages).addClass('alert-success');

            // Set the message text.
            // $(formMessages).text(response);
            $(formMessages).text('Gracias por ponerte en contacto con nosotros. Te responderemos a la brevedad.');

            // Clear the form.
            $('#nombre, #email, #telefono, #website, #mensaje').val('');
            submitBtn.removeAttr('disabled');
        })
        .fail(function(data) {
            // Make sure that the formMessages div has the 'error' class.
            $(formMessages).removeClass('alert-success');
            $(formMessages).addClass('alert-danger');

            // Set the message text.
            /*if (data.responseText !== '') {
                $(formMessages).text(data.responseText);
            } else {*/
                $(formMessages).text('Ouch! Ocurrió un error y no pudimos enviar tu mensaje. Intenta más tarde o escribe directo a info@woopi.com.ar');
            /*}*/
            submitBtn.removeAttr('disabled');
        });
    /*});*/
    } else {
        alert('Error: Complete los campos requeridos');
    }
}
