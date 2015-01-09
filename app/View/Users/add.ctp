<div class="users form">
 
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('email');
        echo $this->Form->input('password');
        echo $this->Form->input('password_confirm', array('label' => 'Confirm Password *', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password'));
        echo $this->Form->input('role', array(
            'options' => array( 'admin' => 'Admin', 'user' => 'User', 'partner' => 'Partner')
        ));
         
        echo $this->Form->submit('Add User', array('class' => 'form-submit',  'title' => 'Click here to add the user') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<?php 
if($this->Session->check('Auth.User')){
echo $this->Html->link(__('Return to Dashboard',true),   array('action'=>'index') ); 
echo "<br>";
echo $this->Html->link(__('Logout',true),   array('action'=>'logout') ); 
}else{
echo $this->Html->link(__('Return to Login Screen',true),   array('action'=>'login') ); 
}
?>