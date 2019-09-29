document.addEventListener('DOMContentLoaded', function() {
    var valid = false;
    var form = $('#contactForm');
    
    var nameInput = $('#contactForm input#name');
    var lastNameInput = $('#contactForm input#lastName');
    var emailInput = $('#contactForm input#email');
    var messageInput = $('#contactForm textarea#message');

    var nameValid = false;
    var lastNameValid = false;
    var emailValid = false;
    var messageValid = false;
    
    var btnSubmit = $('#submitBtn');

    function validateInput(inputRef, regex) {
        var r = new RegExp(regex);
        var validity = false;

        if (!r.test(inputRef.val())) {
            if (!inputRef.hasClass("border-danger")) {
                inputRef.addClass("border-danger")
            }
            validity = false;
        } else {
            if (inputRef.hasClass("border-danger")) {
                inputRef.removeClass("border-danger");
            }
            validity = true;
        }

        if (inputRef.val().length <= 0) {
            if (inputRef.hasClass("border-danger")) {
                inputRef.removeClass("border-danger");
            }
            if (inputRef.attr('id') !== 'address') {
                validity = false;
            }
        }

        return validity;
    }

    // Listens for keyup events across the whole form
    form.on('keyup', function() {
        valid = nameValid && lastNameValid && emailValid && messageValid;
        btnSubmit.attr('disabled', !valid);
    });

    // Listens for keyup events on name input
    nameInput.on('keyup', function() {
        nameValid = validateInput(nameInput, '^[A-Za-zñÑáéíóúÁÉÍÓÚüÜ]+$');
    });

    // Listens for keyup events on lastName input
    lastNameInput.on('keyup', function() {
        lastNameValid = validateInput(lastNameInput, '^[A-Za-zñÑáéíóúÁÉÍÓÚüÜ]+$');
    });

    // Listens for keyup events on email input
    emailInput.on('keyup', function() {
        emailValid = validateInput(emailInput, '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$');
    });

    // Listens for keyup events on message input
    messageInput.on('keyup', function() {
        if (messageInput.val().length <= 20) {
            if (!messageInput.hasClass("border-danger")) {
                messageInput.addClass("border-danger")
            }
            messageValid = false;
        } else {
            if (messageInput.hasClass('border-danger')) {
                messageInput.removeClass('border-danger');
            }
            messageValid = true;
        }
    });
});