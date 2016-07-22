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
        console.log("Success: " + JSON.parse(data).message);
      }, 2000);

    }).fail(function(data) {

      setTimeout(function() {
        $('.loader').removeClass("show").addClass("hide");
        console.log("Error: " + JSON.parse(data).message);
      }, 2000);

    });
  });

})();
