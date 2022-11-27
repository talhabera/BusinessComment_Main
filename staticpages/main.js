
$(document).ready(function () {
    $("#carro")
        .hover(function () {
            $(".people")
                .toggleClass("paused_anim");
        });
});
