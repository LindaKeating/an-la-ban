<!-- Search Button Outline Secondary Right -->
<form class="searchform input-group" method="get" action="<?= esc_url(home_url('/')); ?>">
  <input 
    type="text" 
    name="s" 
    class="form-control" 
    placeholder="<?php _e('Cuardaigh', 'bootscore'); ?>">
  <input 
    type="hidden" 
    value="sceal" 
    name="post_type" />
  <input 
    type="hidden" 
    value="1" 
    name="sentence" />
  <button 
    type="submit" 
    class="input-group-text btn btn-outline-secondary">
    <i class="fa-solid fa-magnifying-glass"></i>
    <span class="visually-hidden-focusable">Cuardaigh</span>
  </button>
</form>
