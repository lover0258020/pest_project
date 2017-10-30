<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
    <title>Marker Labels</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 50%;
        width: 100%;
        float: left;
      }
      #right-panel {
        width: 46%;
        float: left;
      }
      #encoded-polyline {
        height: 100px;
        width: 100%;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1iNQBOAbn2qKWRdwa_2nThtOYDVydehc"></script>
    <script>
      // In the following example, markers appear when the user clicks on the map.
      // Each marker is labeled with a single alphabetical character.
      var labels = 'NABCDEFGHIJKLMNOPQRSTUVWXYZ';
      var labelIndex = 0;

      function initialize() {
        var bangalore = { lat: 22.996459, lng: 120.221548 };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: bangalore
        });
 	var poly = new google.maps.Polyline({
          strokeColor: '#000000',
          strokeOpacity: 1,
          strokeWeight: 3,
          map: map
        });
        // This event listener calls addMarker() when the map is clicked.
        google.maps.event.addListener(map, 'click', function(event) {
          addMarker(event.latLng, map);
	  addLatLngToPoly(event.latLng, poly);
        });

        // Add a marker at the center of the map.
        addMarker(bangalore, map);
      }

      // Adds a marker to the map.
      function addMarker(location, map) {
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.
        var marker = new google.maps.Marker({
          position: location,
          label: labels[labelIndex++ % labels.length],
          map: map
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script>
      function addLatLngToPoly(latLng, poly) {
        var path = poly.getPath();
        // Because path is an MVCArray, we can simply append a new coordinate
        // and it will automatically appear
        path.push(latLng);

        // Update the text field to display the polyline encodings
        var encodeString = google.maps.geometry.encoding.encodePath(path);
        if (encodeString) {
          document.getElementById('encoded-polyline').value = encodeString;
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1iNQBOAbn2qKWRdwa_2nThtOYDVydehc&libraries=geometry&callback=initMap"
        async defer></script>

  </head>
  <body>
    <div id="map"></div>
  </body>
</html>
