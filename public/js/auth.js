$(".login_button").click(function () {
    $("#registerModel").modal("hide");
    $("#loginModel").modal("show");
});

$(".register_button").on("click", function () {
    $("#loginModel").modal("hide");
    $("#registerModel").modal("show");
});
