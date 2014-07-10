<link href='<?=$modx->config['base_url']?>assets/tvs/morephoto/style.css' rel='stylesheet' type='text/css'>
<script>
	  jQuery.getScript('<?=$modx->config['base_url']?>assets/tvs/morephoto/jquery.multiphotos.js',function(){
	 	 jQuery('#tv<?=$field_id?>').multiphotos({'baseUrl':'<?=$modx->config['base_url']?>'});
	  });
</script>
<input type='text' style="display:none;" name='tv<?=$field_id?>' id='tv<?=$field_id?>' value='<?=$field_value?>' />
