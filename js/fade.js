$(function() {

        var elements = [ "#content1", "#content2", "#content3", "#content4", "#content5", "#content6" ];

        // Hide all but the 1st div
        $(elements.join(', ')).hide();

        // Then add a click handlers to the buttons
        $("#thumb1").click(function() {
            $(elements.join(', ')).hide();
            $("#content1").fadeIn('slow');
        });

        $("#thumb2").click(function() {
            $(elements.join(', ')).hide();
            $("#content2").fadeIn('slow');
        });

        $("#thumb3").click(function() {
            $(elements.join(', ')).hide();
            $("#content3").fadeIn('slow');
        });

        $("#thumb4").click(function() {
            $(elements.join(', ')).hide();
            $("#content4").fadeIn('slow');
        });

        $("#thumb5").click(function() {
            $(elements.join(', ')).hide();
            $("#content5").fadeIn('slow');
        });

        $("#thumb6").click(function() {
            $(elements.join(', ')).hide();
            $("#content6").fadeIn('slow');
        });

    })
