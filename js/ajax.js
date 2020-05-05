$(window).on('load', function () {
  initFormHandler();
});

$('.popup__button-close').on('click', function () {
  closePopup();
});

function closePopup() {
  $('.popup').addClass('hidden');
}

function initFormHandler() {
  $('#email').focus(function () {
    $('#email').removeClass('error');
    $('.error_message').addClass('hidden');
  });

  $('.contacts__form').submit(function (event) {
    event.preventDefault();
    var email = $('#email').val();

    if (email === '') {
      $('#email').addClass('error');
      $('.error_message').removeClass('hidden');
    }
    else {
      $.ajax({
        method: 'GET',
        url: '../php/handler.php',
        data: {
          'email': email
        }
      })
        .done(function (response) {
          console.log('Response from server: ' + response);

          if (response == 0) {
            $('.popup').removeClass('hidden');
            $('#popupError').removeClass('hidden');
            $('#popupSuccess').addClass('hidden');
          } else {
            $('.popup').removeClass('hidden');
            $('#popupSuccess').removeClass('hidden');
            $('#popupError').addClass('hidden');
          }
        });
    }
  });
}