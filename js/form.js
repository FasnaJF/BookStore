/**
 * Created by Fasna on 8/8/2015.
 */
$(document).ready(function() {
    $("#loginLink").click(function( event ){
        event.preventDefault();
        $(".overlay").fadeToggle("fast");
    });

    $(".overlayLink").click(function(event){
        event.preventDefault();
        var action = $(this).attr('data-action');
        var id = $(this).attr('value');
        $(".bookID").val(id);

        $("#loginTarget").load("ajax/" + action);

        $(".overlay").fadeToggle("fast");
    });

    $(".close").click(function(){
        $(".overlay").fadeToggle("fast");
    });

    $(document).keyup(function(e) {
        if(e.keyCode == 27 && $(".overlay").css("display") != "none" ) {
            event.preventDefault();
            $(".overlay").fadeToggle("fast");
        }
    });
});

$(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});

$(function(){
    $("input").prop('required',true);
});

