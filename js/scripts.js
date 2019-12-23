$( document ).ready(function() {
    $('button#column').click(function() {
        $('main.episodes').removeClass('view-grid');
        $('main.episodes').addClass('view-list');
    });
    $('button#row-wrap').click(function() {
        $('main.episodes').removeClass('view-list');
        $('main.episodes').addClass('view-grid');
    });
});