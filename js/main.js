$(document).ready(function(){

    $nav = $('.nav');
    $toggleCollapse = $('.toggle-collapse');

    /* click event on taggle menu */
    $toggleCollapse.click(function(){
        $nav.toggleClass('collapse');
    });

});