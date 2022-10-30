<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Vintage Toys</title>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- <script src="//wurfl.io/wurfl.js" crossorigin></script> -->
            <!-- <script type=”text/javascript” src=”//wurfl.io/wurfl.js”></script> -->
            <script src="https://wjs.wurflcloud.com/wurfl.js?time_limit=1000" crossorigin async></script>
            <!-- Bootstrap CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
              crossorigin="anonymous"></script>
              <link rel="stylesheet" type="text/css" href="styles.css">
          </head>
          
          <body>
            <nav class="navbar navbar-expand-sm navbar-light sticky-top bg-light">
              <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                  <img src="images/logo-vintage.png" alt="brand logo" width="50" height="30">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar"
                  aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    <a class="nav-link" href="products.html">Products</a>
                    <a class="nav-link" href="contact.html">Contact Us</a>
                    <a class="nav-link" href="location.html">Location</a>
                    <a class="nav-link" href="extra.html">Extra</a>
                  </div>
                </div>
              </div>
            </nav>
          
            <header>
                <div class="container-fluid p-3 bg-dark text-white">
                  <h2 class="text-center fw-light text-uppercase">vintage toys - extra</h2>
              </div>
              </header>

          
               
                <main class="mt-3 p-3">
                  <?php 
                  require_once './wurfl/MyWurfl.php';
                  $device = MyWurfl::get('complete_device_name');
                  $form = MyWurfl::get('form_factor');
                  $mobile = MyWurfl::get('is_mobile');
                  
                  ?>
                     
                  <h3 class="text-center" >Details about your device</h3>
                   <ul class="list-group list-group-flush text-center">
                      <li class="list-group-item"> <?php echo ($device); ?></li>
                      <li class="list-group-item"> <?php echo ($form); ?></li>
                      <li class="list-group-item"> <?php echo ($mobile); ?></li>
                   </ul>
                  
                  
                  </main>

        



    </body>
    </html>


   
<!-- 
      // var WURFL = { 
      //    “complete_device_name”:”Apple iPhone 5”,
      //    “is_mobile”:true, 
      //    “form_factor”:”Smartphone”
      //  };
       -->
      <!-- <script>
          var complete_device_name;
          var x=document.getElementById("extra");
      
      var result_capabilities = {};
      var WURFLCloudClientObject = new wurfl_cloud_client.WurflCloudClient(configuration, HttpRequest, HttpResponse);
      WURFLCloudClientObject.detectDevice(HttpRequest, null, function(err, result_capabilities){
        WURFLCloudClientObject.getDeviceCapability('complete_device_name', function(error, complete_device_name){
          if(error!=null){
            console.log('Error' + error);
          }else{
            console.log('Device name: ' + complete_device_name);
            x.innerHTML=complete_device_name
          }
        });
      });
      </script> -->

<!-- 
<script>
      <div id=”mobile-only-content”> 
        place holder - more info should populate below this line
    </div>
     @Html.PropertyFor(x => x.CurrentPage.MainContentArea, 
         new { CssClass = “row equal-height”, tag = Global.ContentAreaTags.FullWidth })
    
     <div id="extra"></div>

      <script>

                  var x=document.getElementById("capabilities");
                  
                  document.addEventListener("WurflJSDetectionComplete", function(){
                  ga('send', 'pageview', {
                  'dimension1': WURFL.complete_device_name,
                  'dimension2': WURFL.form_factor,
                  'dimension3': WURFL.is_mobile
                  })  
                  if  (WURFL.is_mobile)  {
                            x.innerHTML=WURFL.is_mobile;
                              //  $("#capabilities") .show() ;
                          }  else  {
                            x.innerHTML="WURFL detection or programming error.";
                              //  $("#capabilities") .hide() ;
                          }
                  console.log("WURFL.js is finished:")
                  console.log(window.WURFL)
                  });
                  
                        
                      </script>
    -->


    
