$(document).ready(function () {
    // Verifica si la política ha sido aceptada previamente
    if (!localStorage.getItem("policyAccepted")) {
        $(".custom-banner").fadeIn();
        console.log("NO ACEPTADAS");
    }

    // Acción al aceptar la política
    $("#acceptPolicy").click(function () {
        localStorage.setItem("policyAccepted", "true");
        $(".custom-banner").fadeOut();
        console.log("SI ACEPTADAS");
    });
});
