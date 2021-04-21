<?php
/* @var $this WebinarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Webinar Attendees',
);

$this->menu=array(
	array('label'=>'Create WebinarAttendees', 'url'=>array('create')),
	array('label'=>'Manage WebinarAttendees', 'url'=>array('admin')),
);
?>

<h1>Webinar Attendees</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
