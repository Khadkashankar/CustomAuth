$(".login_button").click(function () {
    $("#registerModel").model("hide");
    $("#loginModel").model("show");
});

$(".register_button").onclick(function () {
    $("#loginModel").model("hide");
    $("#registerModel").model("show");
});
