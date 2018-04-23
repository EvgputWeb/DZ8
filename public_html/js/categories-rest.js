$('#get-category-form').on('submit', function(e){
    e.preventDefault();
    var cat_id = $('#get-category-id').val();
    $.ajax({
        url: '/categories.php',
        type: 'POST',
        dataType: 'json',
        data: {
            _method: 'GET',
            id : cat_id
        }
    }).done(function (data) {
        $('#get-category-response').text(JSON.stringify(data));
    }).fail(function (data) {
        $('#get-category-response').text(JSON.stringify(data.responseJSON));
    })
});


$('#post-category-form').on('submit', function(e){
    e.preventDefault();
    var cat_name = $('#post-category-name').val();
    $.ajax({
        url: '/categories.php',
        type: 'POST',
        dataType: 'json',
        data: {
            _method: 'POST',
            name : cat_name
        }
    }).done(function (data) {
        $('#post-category-response').text(JSON.stringify(data));
    }).fail(function (data) {
        $('#post-category-response').text(JSON.stringify(data.responseJSON));
    })
});


$('#patch-category-form').on('submit', function(e){
    e.preventDefault();
    var cat_id = $('#patch-category-id').val();
    var cat_name = $('#patch-category-name').val();
    $.ajax({
        url: '/categories.php',
        type: 'POST',
        dataType: 'json',
        data: {
            _method: 'PATCH',
            id : cat_id,
            name : cat_name
        }
    }).done(function (data) {
        $('#patch-category-response').text(JSON.stringify(data));
    }).fail(function (data) {
        $('#patch-category-response').text(JSON.stringify(data.responseJSON));
    })
});


$('#delete-category-form').on('submit', function(e){
    e.preventDefault();
    var cat_id = $('#delete-category-id').val();
    $.ajax({
        url: '/categories.php',
        type: 'POST',
        dataType: 'json',
        data: {
            _method: 'DELETE',
            id : cat_id
        }
    }).done(function (data) {
        $('#delete-category-response').text(JSON.stringify(data));
    }).fail(function (data) {
        $('#delete-category-response').text(JSON.stringify(data.responseJSON));
    })
});
