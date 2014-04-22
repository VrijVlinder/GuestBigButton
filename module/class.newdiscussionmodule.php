<?php if (!defined('APPLICATION')) exit();


class NewDiscussionModule extends Gdn_Module {

   public function AssetTarget() {
      return 'Panel';
   }
   
    // Always show the button, regardless of permissions
   public function ToString() {
     return parent::ToString();
   }
}
















  	   
