$(function() {

        var elements = [ "#content1", "#content2", "#content3", "#content4", "#content5", "#content6" ];

        var STOP_VIDEO_COMMAND = JSON.stringify({
          event: 'command',
          func: 'stopVideo'
        });

        function stopVideos() {
          var youTubeFrames = $('iframe[src*="youtube.com"]');
          youTubeFrames.each(function() {
            this.contentWindow.postMessage(STOP_VIDEO_COMMAND, '*');
          });
        }

        // Hide all but the 1st div
        $(elements.join(', ')).hide();

        // Then add a click handlers to the buttons
        $("#thumb1").click(function() {
            $(elements.join(', ')).hide();
            $("#content1").fadeIn('slow');
            stopVideos();
        });

        $("#thumb2").click(function() {
            $(elements.join(', ')).hide();
            $("#content2").fadeIn('slow');
            stopVideos();
        });

        $("#thumb3").click(function() {
            $(elements.join(', ')).hide();
            $("#content3").fadeIn('slow');
            stopVideos();
        });

        $("#thumb4").click(function() {
            $(elements.join(', ')).hide();
            $("#content4").fadeIn('slow');
            stopVideos();
        });

        $("#thumb5").click(function() {
            $(elements.join(', ')).hide();
            $("#content5").fadeIn('slow');
            stopVideos();
        });

        $("#thumb6").click(function() {
            $(elements.join(', ')).hide();
            $("#content6").fadeIn('slow');
            stopVideos();
        });

    })
