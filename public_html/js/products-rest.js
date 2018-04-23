$('#get-product-form').on('submit', function(e){
    e.preventDefault();
    var prod_id = $('#get-product-id').val();
    $.ajax({
        url: '/products.php',
        type: 'POST',
        dataType: 'json',
        data: {
            _method: 'GET',
            id : prod_id
        }
    }).done(function (data) {
        $('#get-product-response').text(JSON.stringify(data));
    }).fail(function (data) {
        $('#get-product-response').text(JSON.stringify(data.responseJSON));
    })
});


$('#post-product-form').on('submit', function(e){
    e.preventDefault();
    var prod_name = $('#post-product-name').val();
    var prod_price = $('#post-product-price').val();
    var prod_description = $('#post-product-description').val();
    var prod_category_id = $('#post-product-category_id').val();
    $.ajax({
        url: '/products.php',
        type: 'POST',
        dataType: 'json',
        data: {
            _method: 'POST',
            name : prod_name,
            price : prod_price,
            description : prod_description,
            category_id : prod_category_id
        }
    }).done(function (data) {
        $('#post-product-response').text(JSON.stringify(data));
    }).fail(function (data) {
        $('#post-product-response').text(JSON.stringify(data.responseJSON));
    })
});


$('#patch-product-form').on('submit', function(e){
    e.preventDefault();
    var prod_id = $('#patch-product-id').val();
    var prod_name = $('#patch-product-name').val();
    var prod_price = $('#patch-product-price').val();
    var prod_description = $('#patch-product-description').val();
    var prod_category_id = $('#patch-product-category_id').val();
    $.ajax({
        url: '/products.php',
        type: 'POST',
        dataType: 'json',
        data: {
            _method: 'PATCH',
            id : prod_id,
            name : prod_name,
            price : prod_price,
            description : prod_description,
            category_id : prod_category_id
        }
    }).done(function (data) {
        $('#patch-product-response').text(JSON.stringify(data));
    }).fail(function (data) {
        $('#patch-product-response').text(JSON.stringify(data.responseJSON));
    })
});


$('#delete-product-form').on('submit', function(e){
    e.preventDefault();
    var prod_id = $('#delete-product-id').val();
    $.ajax({
        url: '/products.php',
        type: 'POST',
        dataType: 'json',
        data: {
            _method: 'DELETE',
            id : prod_id
        }
    }).done(function (data) {
        $('#delete-product-response').text(JSON.stringify(data));
    }).fail(function (data) {
        $('#delete-product-response').text(JSON.stringify(data.responseJSON));
    })
});
