<main>
        <div class="container-sm p-1">
          <div class="row">
            <div class="mb-3 p-3">
            <p>This page is to show your location on a Google map. If there is an error, an alert will show below this message. If successful, your current location latitude and longitude will show along with a map showing your location.</p>
            <div id="location"></div>
            <div id="mapholder"></div>
            <script>
            var x=document.getElementById("location");

            window.onload = getLocation();

            function getLocation()
              {
              if (navigator.geolocation)
                {
                navigator.geolocation.getCurrentPosition(showPosition,showError);
                }
              else{x.innerHTML="Geolocation is not supported by this browser.";}
              }
            
            function showPosition(position)
              {
              var latlon=position.coords.latitude+","+position.coords.longitude;

              var img_url="http://maps.googleapis.com/maps/api/staticmap?center=" +latlon+"&zoom=14&size=400x300&sensor=false&key=AIzaSyDWqIvjUQoPNIPaxUocitVZ1BcFciIqslA";
              
              x.innerHTML = "<br>Your current location:<br>Latitude: " + position.coords.latitude +
  "<br>Longitude: " + position.coords.longitude + "<br><br>NOTE: this is for the assignment, but to be truly useful, I think this page needs to show a map with users current location along with the store location and navigation options for the user from their current location.";

              document.getElementById("mapholder").innerHTML="<img src='"+img_url+"'>";
              }
            
            function showError(error)
              {
              switch(error.code) 
                {
                case error.PERMISSION_DENIED:
                  x.innerHTML="User denied the request for Geolocation. If you received this error without clicking Block Location you need to check your device and browser location settings and try again."
                  break;
                case error.POSITION_UNAVAILABLE:
                  x.innerHTML="Location information is unavailable."
                  break;
                case error.TIMEOUT:
                  x.innerHTML="The request to get user location timed out."
                  break;
                case error.UNKNOWN_ERROR:
                  x.innerHTML="An unknown error occurred."
                  break;
                }
              }
            </script>
         </div>
        </div>
      </div>

<!-- embedded Google map -->
<!-- 
<div class="map-responsive">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6307.051589852419!2d-122.42250965511293!3d37.77771584866004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808eb456e2dd%3A0xcb1742ab59d38bda!2sCivic%20Center%2C%20San%20Francisco%2C%20CA%2094102!5e0!3m2!1sen!2sus!4v1667011950844!5m2!1sen!2sus" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div> -->
    </main>    