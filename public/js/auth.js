$(".login_button").on("click", function () {
    $("#registerModal").modal("hide");
    $("#loginModal").modal("show");
});

$(".register_button").on("click", function () {
    $("#loginModal").modal("hide");
    $("#registerModal").modal("show");
});
