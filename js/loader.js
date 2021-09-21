

$(document).ready(function () {
    

    var counter = 0;
    // Start the changing images
    setInterval(function () {
      if (counter == 9) {
        counter = 0;
      }
  
      changeImage(counter);
      counter++;
    }, 3000);
  
    // Set the percentage off
    loading();
  });
  
  function changeImage(counter) {
    var images = [
       '<i class="devicon-php-plain colored"></i>',
       '<i class="devicon-laravel-plain-wordmark colored"></i>',
      '<i class="devicon-bootstrap-plain-wordmark colored"></i>',
      '<i class="devicon-jquery-plain-wordmark colored"></i>',
      '<i class="devicon-javascript-plain colored"></i>',
      '<i class="devicon-css3-plain-wordmark colored"></i>',
      '<i class="devicon-mysql-plain-wordmark colored"></i>',
      '<i class="devicon-c-plain-wordmark colored"></i>',
      '<i class="devicon-android-plain-wordmark colored"></i>',
  
    ];
  
    $(".loader .image").html("" + images[counter] + "");
  }

  function loading() {
   
    var num = 0;
  
    for (i = 0 ; i <= 100 ; i++) {
      setTimeout(function () {
        $(".loader span").html(num + "%");
  
        if (num == 100) {
          loading();
        }
        num++;
      }, i * 120);
    }
  }
  