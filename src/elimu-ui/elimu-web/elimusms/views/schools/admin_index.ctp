<div class="schools index">
	<h2><?php __('Schools');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('SchoolID');?></th>
			<th><?php echo $this->Paginator->sort('LanguageID');?></th>
			<th><?php echo $this->Paginator->sort('Name');?></th>
			<th><?php echo $this->Paginator->sort('Phone');?></th>
			<th><?php echo $this->Paginator->sort('Fax');?></th>
			<th><?php echo $this->Paginator->sort('WebSite');?></th>
			<th><?php echo $this->Paginator->sort('Email');?></th>
			<th><?php echo $this->Paginator->sort('DateFounded');?></th>
			<th><?php echo $this->Paginator->sort('Details');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($schools as $school):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $school['School']['SchoolID']; ?>&nbsp;</td>
		<td><?php echo $school['School']['LanguageID']; ?>&nbsp;</td>
		<td><?php echo $school['School']['Name']; ?>&nbsp;</td>
		<td><?php echo $school['School']['Phone']; ?>&nbsp;</td>
		<td><?php echo $school['School']['Fax']; ?>&nbsp;</td>
		<td><?php echo $school['School']['WebSite']; ?>&nbsp;</td>
		<td><?php echo $school['School']['Email']; ?>&nbsp;</td>
		<td><?php echo $school['School']['DateFounded']; ?>&nbsp;</td>
		<td><?php echo $school['School']['Details']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $school['School']['SchoolID'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $school['School']['SchoolID'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $school['School']['SchoolID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $school['School']['SchoolID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New School', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Schoolsaddresses', true), array('controller' => 'schoolsaddresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New The School Official Addresses', true), array('controller' => 'schoolsaddresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schoolstaffs', true), array('controller' => 'schoolstaffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New The School Work Staffers', true), array('controller' => 'schoolstaffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New The School Teachers', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
	</ul>
</div>