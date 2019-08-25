var ComingSoon = function () {
    //function to initiate Countdown
    var runComingSoon = function () {
        $("#countdown").countdown({
            date: "10 august 2015 12:00:00",
            format: "on"
        }, function () {
            // callback function
        });
    };
    return {
        //main function to initiate template pages
        init: function () {
            runComingSoon();
        }
    };
}();