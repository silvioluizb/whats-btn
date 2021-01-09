<?php 
	// Default WhatsApp base URL
    $iphone     = strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone' );
    $android    = strpos($_SERVER['HTTP_USER_AGENT'], 'Android' );
    $berry      = strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry' );
    $ipod       = strpos($_SERVER['HTTP_USER_AGENT'], 'iPod' );
    $ipad       = strpos($_SERVER['HTTP_USER_AGENT'], 'iPad' );
    $webOS      = strpos($_SERVER['HTTP_USER_AGENT'], 'webOS' );
    $silk       = strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/' );
    $kindle     = strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle' );
    $opera      = strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini' );
    $mobi       = strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' );
    if ($iphone || $android || $berry || $ipod || $ipad || $webOS || $silk || $kindle || $opera || $mobi !== false ) {
      $wa_base = 'api';  
    } else {
        if ( get_option('wa_order_whatsapp_base_url') == 'api') {
           $wa_base_url = 'api'; 
        } else {
           $wa_base_url = 'web'; 
        }
       $wa_base = $wa_base_url; 
    }
	echo '<a href="https://'.$wa_base.'.whatsapp.com/send?phone=5541999999999&text=Olá, gostaria de solicitar um orçamento para o seguinte produto: ' . get_permalink() . '" class="whats-orcamento" target="_blank"><i class="fa fa-whatsapp"></i> Solicitar Orçamento no Whatsapp</a>'
?>
