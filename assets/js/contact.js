/* CONTACT */
(function() {

  $('#contactForm').submit(function(event) {
    event.preventDefault();

    $.ajax({
      url: 'core/contact.php',
      method: 'POST',
      data: $("#contactForm").serialize(),
      beforeSend: function() {
        $('.loader').removeClass("hide").addClass("show");
      }
    }).done(function(data) {

      setTimeout(function() {
        $('.loader').removeClass("show").addClass("hide");
        $('#contactForm').trigger("reset");
        $('.message').html(JSON.parse(data).message).fadeIn(1000).addClass("msg-green").delay(3000).fadeOut(1000, function() { $('.message').removeClass("msg-green"); });
      }, 2000);

    }).fail(function(data) {

      setTimeout(function() {
        $('.loader').removeClass("show").addClass("hide");
        $('#contactForm').trigger("reset");
        $('.message').html(JSON.parse(data).message).fadeIn(1000).addClass("msg-red").delay(3000).fadeOut(1000, function() { $('.message').removeClass("msg-red"); });
      }, 2000);

    });
  });

})();
