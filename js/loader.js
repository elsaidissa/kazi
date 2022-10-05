$(document).ready(function () {
    $(".sidenav").sidenav({
        draggable: true,
    });
    $(".dropdown-trigger").dropdown();
    $(".slider").slider({ full_width: true });
    $('.parallax').parallax();
    $('.carousel').carousel({
        numVisible: 7,
        shift: 55,
        padding: 55,
        indicators: false,
        duration: 200,
        dist: -100,
        noWrap: false,
        fullWidth: false,

    });
    $('.tooltipped').tooltip();
    $('.scrollspy').scrollSpy();
    $('.materialboxed').materialbox();
    $('.fixed-action-btn').floatingActionButton();
    $('.datepicker').datepicker();
    $('.modal').modal();
    $('.tap-target').tapTarget();
    $('.collapsible').collapsible();


    



    
});

function toggleModal() {
    var instance = M.Modal.getInstance()
    instance.open()
    
}