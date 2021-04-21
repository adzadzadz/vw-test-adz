<?php
/* @var $this WebinarController */
/* @var $model WebinarAttendees */

$this->breadcrumbs=array(
	'Webinar Attendees'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WebinarAttendees', 'url'=>array('index')),
	array('label'=>'Create WebinarAttendees', 'url'=>array('create')),
	array('label'=>'View WebinarAttendees', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage WebinarAttendees', 'url'=>array('admin')),
);
?>

<h1>Update WebinarAttendees <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>