<?php

// Verifica o tipo de post
if (get_post_type() == 'podcast') :
    get_template_part('single', 'podcast');
endif;
if (get_post_type() == 'download') :
    get_template_part('single', 'downloads');
endif;
if (get_post_type() == 'video') :
    get_template_part('single', 'videos');
endif;
if (get_post_type() == 'artigo') :
    get_template_part('single', 'artigos');
endif;
if (get_post_type() == 'simulador') :
    get_template_part('single', 'simuladores');
endif;

// Se for a categoria serviços 
if (in_category('o-que-fazemos')) :
	if(is_single(2915)):
		include (TEMPLATEPATH.'/single-1.php');
		return;
	elseif (is_single(2896)):
		include (TEMPLATEPATH.'/single-2.php');
		return;
	else:
		include (TEMPLATEPATH.'/single-3.php');
		return;
	endif;	
endif;

?>
