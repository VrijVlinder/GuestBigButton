<?php if (!defined('APPLICATION')) exit();
/*
Copyright 2008, 2014 Vanilla Forums Inc.
This file is part of Garden.
Garden is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
Garden is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with Garden.  If not, see <http://www.gnu.org/licenses/>.
Contact Vanilla Forums Inc. at support [at] vanillaforums [dot] com
*/

// Define the plugin:


$PluginInfo['GuestBigButton'] = array(
   'Name'=>'GuestBigButton',
   'Description' => "This plugin adds a New Discussion Big Button that is viewable by guests on the Panel,it replaces the original so it shows always but only goes to post if logged in. ",
   'Version' => '1.2',
   'Author' => "VrijVlinder",
   'AuthorEmail' => 'contact@vrijvlinder.com',
   'AuthorUrl' => "http://www.vrijvlinder.com"
);

class GuestBigButton_Plugin extends Gdn_Plugin {

   
 protected function RefreshModuleCache() {
  // Refresh the autoloader cache
  Gdn_Autoloader::SmartFree('library', 'newdiscussionmodule');
}
public function Setup() {
  $this->RefreshModuleCache();
}
public function OnDisable() {
  $this->RefreshModuleCache();
}


}















    	   
