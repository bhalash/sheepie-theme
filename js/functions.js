function contentHeight() {
    // Page height - article bottom-margin.
    $('.right-wrap').css('min-height', $(window).height() + 'px');
}

function setSearchBoxText() {
    // Inserts the search query string into the search box. 
    var searchBox = '.right-wrap .search-input';
    var queryBox = '.search-query-hidden';

    if ($(searchBox).length > 0 && $(queryBox).length > 0) {
        var query = $(queryBox).text();
        $(queryBox).remove();
        $(searchBox).val(query);
        $(searchBox).focus();
    }
}

$(function() {
    // For google-code-prettify
    $('pre').each(function() {
        $(this).addClass('prettyprint');
    });    

    $('.current-menu-item').prev().css('margin-bottom', '10px');
    $('.current-menu-item').next().css('margin-top', '10px');

    contentHeight();
    
    // Remove underline from hyperlink images. 
    $('p > a').each(function() {
        if ($(this).children('img').length > 0) {
            $(this).hover(function() {
                $(this).css('border-style', 'none');
            });
        }
    });

    setSearchBoxText();
});

$(window).resize(function() {
    contentHeight();
});