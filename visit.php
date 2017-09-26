<?php include 'php/header.php'; ?>
<div id="content" class="col-md-9">
<div class="text-center">
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBdKbioKIy3ClujeqtyrWnxEHsVRLZJNOc'></script><div style='overflow:hidden;height:400px;width:943px;'><div id='gmap_canvas' style='height:400px;width:920px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://add-map.com/'>_</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=ad82ec40fa638236834d6e78d5ddd4acb90700ed'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(25.2624184,82.99339340000006),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(25.2624184,82.99339340000006)});infowindow = new google.maps.InfoWindow({content:'<strong>Department of Computer Science</strong><br>Department of Computer Science BHU<br>221005 VARANASI<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
<br />
<h4><address>
 <h2>Department of Computer Science</h2>         
  Banaras Hindu University(BHU),<br>
  Varanasi-221005, India.<br>
  Tel: 91-542-2307306(O)<br>
  Email: hd_cs@bhu.ac.in<br>
</address></h4>
</div>
<div class="pull-left">


</div>
</div>
<?php include 'php/footer.php'; ?>