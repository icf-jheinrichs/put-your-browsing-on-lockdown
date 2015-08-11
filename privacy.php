<?php $latlong = (isset($_GET['ll']) ? $_GET['ll'] : 'lat:-34.397,lng:150.644'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Hello World</title> 
        <style>
            /*Critical CSS*/
            body,html { font-family: Lucinda Sans, sans-serif; text-align: center; }
            #map-canvas { width: 250px; height: 250px; margin: 1em auto; }
        </style>
    </head>
    <body>
        <h1>Hello World</h1>
        <p><a href="http://www.addthis.com/bookmark.php?v=250" class="addthis_button">Share</a></p>
        <div id="map-canvas"></div>
        <p><a href="privacy.php?ll=lat:39.1833,lng:-77.2667">Germantown, Maryland</a></p>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDwI6_dUGEjF2H9pl7k6vm_M3p-wpwneSg"></script>
        <script src="http://s7.addthis.com/js/250/addthis_widget.js"></script>
        <script>
            //Google Maps
            function initialize() {
                var mapOptions = { center: { <?php echo $latlong?> }, zoom: 8 };
                var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            }

            google.maps.event.addDomListener(window, 'load', initialize);

            //Google Analytics
            (function (i, s, o, g, r, a, m) {i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {(i[r].q = i[r].q || []).push(arguments)}, i[r].l = 1 * new Date(); a = s.createElement(o),m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-46624623-1', 'auto');
            ga('send', 'pageview');
        </script>        
    </body>
</html>