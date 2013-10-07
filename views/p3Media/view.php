<?php
    $this->setPageTitle(
        Yii::t('p3MediaModule.model', 'P3 Media')
        . ' - '
        . Yii::t('crud', 'View')
        . ': '   
        . $model->getItemLabel()            
);    
$this->breadcrumbs[Yii::t('p3MediaModule.model','P3 Medias')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id' => $model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('crud', 'View');
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('p3MediaModule.model','P3 Media')?>
    <small><?php echo Yii::t('crud','View')?> #<?php echo $model->id ?></small>
    </h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>


<div class="row">
    <div class="span7">
        <h2>
            <?php echo Yii::t('crud','Data')?>            <small>
                <?php echo $model->itemLabel?>            </small>
        </h2>

        <?php
        $this->widget(
            'TbDetailView',
            array(
                'data' => $model,
                'attributes' => array(
                array(
                        'name' => 'id',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'id',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
array(
                        'name'=>'status',
                        'type' => 'raw',
                        'value' =>$this->widget(
                            'TbEditableField',
                            array(
                                'model'=>$model,
                                'emptytext' => 'Click to select',
                                'type' => 'select',
                                'source' => P3Media::optsstatus(),
                                'attribute'=>'status',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                                'select2' => array(
                                    'placeholder' => 'Select...',
                                    'allowClear' => true
                                )
                            ),
                            true
                        )
                    ),
array(
                        'name' => 'type',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'type',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
array(
                        'name' => 'name_id',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'name_id',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
array(
                        'name' => 'default_title',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'default_title',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
array(
                        'name' => 'default_description',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'default_description',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
array(
                        'name' => 'tree_parent_id',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'tree_parent_id',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
array(
                        'name' => 'tree_position',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'tree_position',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
array(
                        'name' => 'custom_data_json',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'custom_data_json',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
array(
                        'name' => 'original_name',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'original_name',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
array(
                        'name' => 'path',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'path',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
array(
                        'name' => 'hash',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'hash',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
array(
                        'name' => 'mime_type',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'mime_type',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
array(
                        'name' => 'size',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'size',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
array(
                        'name' => 'info_php_json',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'info_php_json',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
array(
                        'name' => 'info_image_magick_json',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'info_image_magick_json',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
array(
                        'name' => 'access_owner',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'access_owner',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
array(
                        'name'=>'access_domain',
                        'type' => 'raw',
                        'value' =>$this->widget(
                            'TbEditableField',
                            array(
                                'model'=>$model,
                                'emptytext' => 'Click to select',
                                'type' => 'select',
                                'source' => P3Media::optsaccessdomain(),
                                'attribute'=>'access_domain',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                                'select2' => array(
                                    'placeholder' => 'Select...',
                                    'allowClear' => true
                                )
                            ),
                            true
                        )
                    ),
array(
                        'name'=>'access_read',
                        'type' => 'raw',
                        'value' =>$this->widget(
                            'TbEditableField',
                            array(
                                'model'=>$model,
                                'emptytext' => 'Click to select',
                                'type' => 'select',
                                'source' => P3Media::optsaccessread(),
                                'attribute'=>'access_read',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                                'select2' => array(
                                    'placeholder' => 'Select...',
                                    'allowClear' => true
                                )
                            ),
                            true
                        )
                    ),
array(
                        'name'=>'access_update',
                        'type' => 'raw',
                        'value' =>$this->widget(
                            'TbEditableField',
                            array(
                                'model'=>$model,
                                'emptytext' => 'Click to select',
                                'type' => 'select',
                                'source' => P3Media::optsaccessupdate(),
                                'attribute'=>'access_update',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                                'select2' => array(
                                    'placeholder' => 'Select...',
                                    'allowClear' => true
                                )
                            ),
                            true
                        )
                    ),
array(
                        'name'=>'access_delete',
                        'type' => 'raw',
                        'value' =>$this->widget(
                            'TbEditableField',
                            array(
                                'model'=>$model,
                                'emptytext' => 'Click to select',
                                'type' => 'select',
                                'source' => P3Media::optsaccessdelete(),
                                'attribute'=>'access_delete',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                                'select2' => array(
                                    'placeholder' => 'Select...',
                                    'allowClear' => true
                                )
                            ),
                            true
                        )
                    ),
array(
                        'name'=>'access_append',
                        'type' => 'raw',
                        'value' =>$this->widget(
                            'TbEditableField',
                            array(
                                'model'=>$model,
                                'emptytext' => 'Click to select',
                                'type' => 'select',
                                'source' => P3Media::optsaccessappend(),
                                'attribute'=>'access_append',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                                'select2' => array(
                                    'placeholder' => 'Select...',
                                    'allowClear' => true
                                )
                            ),
                            true
                        )
                    ),
array(
                        'name' => 'copied_from_id',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'copied_from_id',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
array(
                        'name' => 'created_at',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'created_at',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
array(
                        'name' => 'updated_at',
                        'type' => 'raw',
                        'value' => $this->widget(
                            'TbEditableField',
                            array(
                                'model' => $model,
                                'attribute' => 'updated_at',
                                'url' => $this->createUrl('/p3media/p3Media/editableSaver'),
                            ),
                            true
                        )
                    ),
           ),
        )); ?>
    </div>

    <div class="span5">
        <?php $this->renderPartial('_view-relations',array('model' => $model)); ?>    </div>
</div>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>