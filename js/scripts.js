/*!
 * Start Bootstrap - Agency v6.0.3 (https://startbootstrap.com/theme/agency)
 * Copyright 2013-2020 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
 */
(function($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (
            location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length ?
                target :
                $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate({
                        scrollTop: target.offset().top - 72,
                    },
                    1000,
                    "easeInOutExpo"
                );
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $(".js-scroll-trigger").click(function() {
        $(".navbar-collapse").collapse("hide");
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $("body").scrollspy({
        target: "#mainNav",
        offset: 74,
    });

    // Collapse Navbar
    var navbarCollapse = function() {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);
})(jQuery); // End of use strict


function sendmail() {
    var msg = $('#message').val();
    var phone = $('#phone').val();
    var mail = $('#email').val();
    var name = $('#name').val();

    if (msg == '' || phone == '' || name == '' || mail == '') {
        if (msg == '') {
            $('#alertmsg').html('Please fill message');
        } else $('#alertmsg').html('');
        if (phone == '') {
            $('#alertphone').html('Please your fill your phone');
        } else $('#alertphone').html('');
        if (name == '') {
            $('#alertname').html('Please fill your name');
        } else $('#alertname').html('');
        if (mail == '') {
            $('#alertemail').html('Please fill your email');
        } else $('#alertemail').html('');
    } else { /* if all is filled send email*/

    }


}

document.addEventListener("scroll", function() {

    var element = document.querySelector('#about'); //when rach the about section
    var position = element.getBoundingClientRect();
    if (position.top <= window.innerHeight) {
        $("#title1").addClass("animateheader");
        $("#title2").addClass("animateheader2");
        $("#img-about").addClass("show-services");
        $("#text-about").addClass("show-services");
        $("pre").addClass("show-services");
        $(".btn-about1").addClass("animateheader2");

    }

    var element = document.querySelector('#title-skills'); //when reach the skills section
    var position = element.getBoundingClientRect();
    if (position.top <= window.innerHeight) {
        $('#title-skills').addClass("animateheader");
        $('#skillslist').addClass("show-services");
        //$('#piechart2').addClass("show-services");
    }


    var element = document.querySelector('#services'); //when reach the services section
    var position = element.getBoundingClientRect();
    if (position.top <= window.innerHeight) {
        $('#serv-title').addClass("animateheader");
        $('#serv-subtitle').addClass("animateheader2");
        $('#serv').addClass("show-services");

    }

    var element = document.querySelector('#portfolio'); //when reach the project section
    var position = element.getBoundingClientRect();
    if (position.top <= window.innerHeight) {
        $('#title-proj').addClass("animateheader");
        $('#subtitle-proj').addClass("animateheader2");
        $('.proj-list').addClass("show-services");
    }

    var element = document.querySelector('#contact'); //when reach the project section
    var position = element.getBoundingClientRect();
    if (position.top <= window.innerHeight) {
        $('#title-cont').addClass("animateheader");
        $('#subtitle-cont').addClass("animateheader2");
        $('#form-con').addClass("show-services");
        $('#sendMessageButton').addClass("animateheader");
    }

});




