<div id='ajaxUp' class="container">
    <div class="content">
        <div class="title"><?=Yii::t('main', 'Gallery')?></div>
        <?php $this->widget('zii.widgets.CListView', array(
            'tagName'=>'div',
            'itemsTagName' => 'ul',
            'itemsCssClass' => 'album-list',
            
            'dataProvider'=>$dataProvider,
            'itemView'=>'galleryitem', // представление для одной записи
            'ajaxUpdate'=>true, // отключаем ajax поведение
            'emptyText'=>Yii::t('main','This gallery is empty'),
            //'summaryText'=>"{start}&mdash;{end} из {count}",
            //'template'=>'{summary} {sorter} {items} <hr> {pager}',
            'template'=>'{items}{pager}',
            'pager'=>array(
                'class'=>'application.widgets.GLinkPager',
                'header'=>false,
                //'cssFile'=>'/css/pager.css', // устанавливаем свой .css файл
                'htmlOptions'=>array('class'=>'pagination'),
            ),
        )); ?>
    </div>
</div>
