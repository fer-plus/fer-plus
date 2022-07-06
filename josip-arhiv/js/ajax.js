let head = null;
head = $.ajax({
    url: 'head.html',
    success: function(data) {
        $('head').html(data);
    }
});
let header = null;
header = $.ajax({
    url: 'header.html',
    success: function(data) {
        $('header').html(data);
    }
});