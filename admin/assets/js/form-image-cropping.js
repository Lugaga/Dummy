var ImageCropping = function () {
    var jcrop_api, boundx, boundy;
    var runBasicHandler = function () {
        $('#target').Jcrop({
            onChange: showCoords,
            onSelect: showCoords,
            onRelease: clearCoords
        }, function () {
            jcrop_api = this;
        });
        $('#coords').on('change', 'input', function (e) {
            var x1 = $('#x1').val(),
                x2 = $('#x2').val(),
                y1 = $('#y1').val(),
                y2 = $('#y2').val();
            jcrop_api.setSelect([x1, y1, x2, y2]);
        });
    };