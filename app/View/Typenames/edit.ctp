<div class="typenames form">
<?php echo $this->Form->create('Typename'); ?>
	<fieldset>
		<legend><?php echo __('Edit Typename'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('typename');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Typename.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Typename.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Typenames'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
