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
    <li class="list-group-item"> <?php if ($mobile == 1) {  echo 'mobile device'; } else { echo 'Non-mobile device'; } ?></li>
 </ul>


</main>