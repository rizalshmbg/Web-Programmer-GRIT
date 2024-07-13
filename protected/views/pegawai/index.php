<?php
/* @var $this PegawaiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
	'Pegawais',
);

$this->menu = array(
	array('label' => 'Create Pegawai', 'url' => array('create')),
	array('label' => 'Manage Pegawai', 'url' => array('admin')),
);
?>

<h1>List Pegawai</h1>

<?php
$this->widget('zii.widgets.CListView', array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
));
?>