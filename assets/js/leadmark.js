$(document).ready(function() {
    $(".navbar .nav-link").on('click', function(event) {
        var hash = this.hash;

        // Verifica si estás en la página principal
        if (window.location.pathname === '/' && hash !== "") {

            // Previene el comportamiento por defecto solo si estás en la misma página
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 700, function() {
                window.location.hash = hash;
            });

        } else if (hash !== "") {
            // Si no estás en la página principal, sigue la redirección normal
            window.location.href = "/" + hash;
        }
    });
});



// protfolio filters
$(window).on("load", function() {
    var t = $(".portfolio-container");
    t.isotope({
        filter: "*",
        animationOptions: {
            duration: 750,
            easing: "linear",
            queue: !1
        }
    });
    
    $(".filters a").click(function() {
        $(".filters .active").removeClass("active");
        $(this).addClass("active");
        var i = $(this).attr("data-filter");
        return t.isotope({
            filter: i,
            animationOptions: {
                duration: 750,
                easing: "linear",
                queue: !1
            }
        }), !1
    });
});

$(document).ready(function () {
    $('.nav-item.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });
});

