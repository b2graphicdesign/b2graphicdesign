(function(){ $(".show_content").hide(); });

$(".link").click(function(){
    $(".show_content").hide();
    theDiv = $(this).attr("href");
    $(theDiv).show();
});
function toggle_menu() {
    $('.mobile_menu').toggle();
    $('.mobile_li a').next().hide();
};
// $(function(){
//     $('.link').click(function(){
//         $('iframe').attr('src', $('iframe').attr('src'));
//     });
// });
