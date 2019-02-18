$(document).ready(function(){
    $(".email-input").blur(function(){
        var email = this.value;

        $.ajax({
            url: URL+'/emailTest',
            data: {email: email},
            type: 'POST',
            success: function(response){
                if(response == "used"){
                    $(".email-input").css("border", "1px solid red");
                }else{
                    $(".email-input").css("border", "1px solid green");
                }
            }
        });

    });

});