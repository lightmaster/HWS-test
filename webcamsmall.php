<?php include('livedata.php');error_reporting(0);?>
<style>
.webcam{
-webkit-border-radius:4px;	-moz-border-radius:4px;	-o-border-radius:4px;	-ms-border-radius:4px;border-radius:4px;border:solid RGBA(84, 85, 86, 1.00) 2px;width:275px;height:145px;margin:4px;}
</style>
<!-- HOMEWEATHER STATION TEMPLATE SIMPLE WEBCAM -add your url as shown below do NOT delete the class='webcam' !!! -->

<?php $file_headers = @get_headers($webcamurl); ?>
<div class="updatedtime1"><span>
<?php if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
  echo $offline. '<offline> Offline </offline>';
} else {
  echo $online.' '.date($timeFormat);
}
?>
</span></div>
<img src="<?php echo $webcamurl?>?v=<?php echo date('YmdGis');?>>" alt="weathercam" class="webcam">
</span>
