var FormElements = function () {
    var runInputLimiter = function () {
        $('.limited').inputlimiter({
            remText: 'You only have %n character%s remaining...',
            remFullText: 'Stop typing! You\'re not allowed any more characters!',
            limitText: 'You\'re allowed to input %n character%s into this field.'
        });
    };
    var runAutosize = function () {
        $("textarea.autosize").autosize();
    };
    var runSelect2 = function () {
        $(".search-select").select2({
            placeholder: "Select a State",
            allowClear: true
        });
    };