<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->Form->input('username',array('label' => __('username')));
        echo $this->Form->input('password',array('label' => __('password')));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
<?php
 echo $this->Html->link(__('Add A New User',true),   array('action'=>'add') ); 
?>
<br/>
<?php echo __('Language: ') ?>
<a href="<?php echo  $this->Html->url('/login/vie', true); ?>"><?php echo __('Vietnamese'); ?></a>
<a href="<?php echo  $this->Html->url('/login/en', true); ?>"><?php echo __('English'); ?></a>