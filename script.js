jQuery(document).ready(function($) {
    "use strict";
    $('#customers-testimonials').owlCarousel( {
            
            loop: true,
            center: true,
            items: 3,
            margin: 30,
            autoplay: true,
            dots:true,
        nav:true,
            autoplayTimeout: 3500,
        autoplayHoverPause:false,
        stopOnHover:true,
            smartSpeed: 330,
          navText: ['<i class="fa fa-arrow-alt-circle-left" style="font-size:30px;color:transparent"></i>','<i class="fa fa-arrow-alt-circle-right" style="font-size:30px;color:transparent"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1170: {
                    items: 3
                }
            }
        });
    });

   