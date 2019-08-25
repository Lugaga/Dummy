var Dropzone = function () {
    var runDropzone = function () {
        $(".dropzone").dropzone({
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 5.0, // MB
            addRemoveLinks: true
        });
    };
    return {
        init: function () {
            runDropzone();
        }
    };
}();