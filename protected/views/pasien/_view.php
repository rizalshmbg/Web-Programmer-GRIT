<?php
/* @var $this PasienController */
/* @var $data Pasien */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('umur')); ?>:</b>
	<?php echo CHtml::encode($data->umur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wilayah_id')); ?>:</b>
	<?php echo CHtml::encode($data->wilayah_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tindakan_id')); ?>:</b>
	<?php echo CHtml::encode($data->tindakan_id); ?>
	<br />


</div>