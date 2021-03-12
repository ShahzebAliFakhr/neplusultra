$(document).ready(function () {
    
    //Smooth Scroll
    $(function() {
        $('html').smoothScroll(500);
    });
    
    
    var ckbox = $('#school');

    $('input').on('click',function () {
        if (ckbox.is(':checked')) {
            $("#schoolnamebox").removeClass("d-none");
        } else {
            $("#schoolnamebox").addClass("d-none");
        }
    });
    
});