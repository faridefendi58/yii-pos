<?php $this->widget('ext.bootstrap-select.TbSelect',array(
    'name'=>'find_customer',
    'data' => Customer::list_items('Pilih Pelanggan'),
    'htmlOptions' => array(
        'data-live-search'=>true,
        'class'=>'form-control no-margin',
    ),
)); ?>