<?php
Yii::import('zii.widgets.CPortlet');

class adminMainMenu extends CPortlet{
	public $visible=true;
	
	public function init()
    {
        if($this->visible)
        {
 
        }
    }
 
    public function run()
    {
        if($this->visible)
        {
            $this->renderContent();
        }
    }
	
	protected function renderContent()
	{
		$this->render('_adminmainmenu',array('items'=>$items));
	}
}

?>
