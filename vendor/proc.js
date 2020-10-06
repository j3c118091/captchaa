$("#form_captcha").validate({
    submitHandler: function () {
        $.post("/proc.php?ajax", $("#form_captcha").serialize(), function (a) {
            "Success" == a ? (window.location = $("#link").val()) : ($("#notif").show(), grecaptcha.reset());
        });
    },
});
