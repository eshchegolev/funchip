<?php
$options = get_option( 'map_api_settings' );
$title =  $options['map_api_text_field_0'];
$iframeCode =  $options['map_api_text_field_1'];
?>

<a id="map"></a>
<div class="fusion-fullwidth ">
    <h1 style="color: orangered; text-align: center"><?php echo "До нас легко добраться :)" ?></h1>
	<?php echo $iframeCode ?>
</div>
