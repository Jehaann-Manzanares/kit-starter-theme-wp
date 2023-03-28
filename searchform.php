<?php
/*

Dynamic form 
@package packageName
@subpackage packageName
@since 1.0
*/
?>
 <form class="" action=" <?php echo home_url(); ?>" method="get">
   <input type="text" name="s" id="s" value="<?php the_search_query(); ?>" idplaceholder="Search">
   <button type="submit" name="enviar">
     <i class="fa fa-search" aria-hidden="true"></i>
     Search
   </button>
 </form>
