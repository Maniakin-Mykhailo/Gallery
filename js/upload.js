$(document).ready(function () {
    $(".form").submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: "post",
            url: "/file.php",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success:function (result){
                alert(result)
            },
            error:function (result){
                alert(result)
            }
        });
    });
});