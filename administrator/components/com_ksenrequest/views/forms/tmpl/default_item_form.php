<?php defined( '_JEXEC' ) or die; ?>
<tr class="list_item <?php echo ($this->item->published==0?'disabled':'')?>">
	<td class="handler"><span></span></td>
	<td class="check"><input type="checkbox" class="check-item" /></td>	
	<td class="name stretch">
		<div class="descr">
			<a rel='{"x":"90%","y":"90%"}' href="<?php echo JRoute::_('index.php?option=com_ksenrequest&view=forms&layout=form&id='.$this->item->id.'&tmpl=component'); ?>" class="km-modal"><?php echo $this->item->title; ?></a>
			<p>
				<a rel='{"x":"90%","y":"90%"}' href="<?php echo JRoute::_('index.php?option=com_ksenrequest&view=forms&layout=form&id='.$this->item->id.'&tmpl=component'); ?>" class="edit km-modal"><?php echo JText::_('ks_edit')?></a>
			</p>
		</div>
	</td>
	<td class="sort changeble">
		<span class="ordering"><?php echo $this->item->ordering?></span>
		<p><input type="text" class="inputbox ordering" name="items[<?php echo $this->item->id; ?>][ordering]" value="<?php echo $this->item->ordering?>"></p>
	</td>
	<td class="stat"><input type="checkbox" class="status" name="items[<?= $this->item->id ?>][published]" value="1" <?php echo ($this->item->published==1?'checked':'')?>></td>
	<td class="del"><a href="#"></a></td>
	<input type="hidden" class="id" name="items[<?= $this->item->id ?>][id]" value="<?= $this->item->id ?>">
</tr>