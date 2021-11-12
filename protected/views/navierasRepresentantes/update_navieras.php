<?php
$this->breadcrumbs=array(
	Yii::t('app','NavierasRepresentantes')=>array('index'),	
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' '.Yii::t('app','NavierasRepresentantes'),'url'=>array('index'), 'icon'=>TbHtml::ICON_ALIGN_JUSTIFY . " " . TbHtml::ICON_COLOR_WHITE),
	
	array('label'=>Yii::t('app','Create').' '.Yii::t('app','NavierasRepresentantes'),'url'=>array('create', 'button'=>1, 'text'=>Yii::t('app','Create').' '.Yii::t('app','NavierasRepresentantes')), 'icon'=>TbHtml::ICON_FILE . " " . TbHtml::ICON_COLOR_WHITE, "visible"=> Yii::app()->session['p']['create'] == 1 ? true : false),
	
	array('label'=>Yii::t('app','View').' '.Yii::t('app','NavierasRepresentantes'),'url'=>array('view','id'=>$model->id), 'icon'=>TbHtml::ICON_EYE_OPEN . " " . TbHtml::ICON_COLOR_WHITE),
	
	array('label'=>Yii::t('app','Manage').' '.Yii::t('app','NavierasRepresentantes'),'url'=>array('admin'), 'icon'=>TbHtml::ICON_COG . " " . TbHtml::ICON_COLOR_WHITE),
);
?>

<?php if (!$this->asDialog) : ?>

<h1><?php echo Yii::t('app','Update').' '.Yii::t('app','Representantes'); ?>   #<?php echo $model->id; ?></h1>

<?php endif; ?>
	

<?php echo $this->renderPartial('_form_navieras',array('model'=>$model,
	            'id_naviera'=>$id_naviera,
	            'id_representante'=>$id_representante,
)); ?>