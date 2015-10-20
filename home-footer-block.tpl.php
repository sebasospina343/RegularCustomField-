 <ul class="col-md-3 col-sm-3">
    <li>
        <h4><?php print $title;?></h4>
    </li>
 
    <?php if($type == 'link'):?>

      <?php foreach($items as $item):?>
          <li><a href="http://<?php print $item['url'];?>"><?php print $item['txt'];?></a>
          </li>
      <?php endforeach;?>

    <?php endif;?>

    <?php if($type == 'txt'):?>

      <?php foreach($items as $item):?>
        <li><?php print $item;?></li>
      <?php endforeach;?>
      
    <?php endif;?>

</ul>