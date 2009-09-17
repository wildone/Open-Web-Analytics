<?php

//
// Open Web Analytics - An Open Source Web Analytics Framework
//
// Copyright 2006 Peter Adams. All rights reserved.
//
// Licensed under GPL v2.0 http://www.gnu.org/copyleft/gpl.html
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
// $Id$
//

require_once(OWA_BASE_CLASS_DIR.'installController.php');
require_once(OWA_BASE_DIR.'/owa_view.php');


class owa_installDetectedController extends owa_controller {

	function owa_installDetectedController($params) {
	
		return owa_installDetectedController::__construct($params); 
			
	}
	
	function __construct($params) {
		
		return parent::__construct($params);
	}
	
	
	function action() {
	
		$this->setView('base.install');
		$this->setSubview('base.installDetected');
		
		return;
	
	}

}




/**
 * Installation Detected View
 * 
 * @author      Peter Adams <peter@openwebanalytics.com>
 * @copyright   Copyright &copy; 2006 Peter Adams <peter@openwebanalytics.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GPL v2.0
 * @category    owa
 * @package     owa
 * @version		$Revision$	      
 * @since		owa 1.0.0
 */
class owa_installDetectedView extends owa_view {
	
	function owa_installDetectedView() {
		
		return owa_installDetectedView::__construct();
	}
	
	function __construct() {
		
		return parent::__construct();
	}
	
	function render() {
		
		$this->body->set_template('install_schema_detected.tpl');
		
		//page title
		$this->t->set('page_title', 'OWA INstallation Detected');
		
		return;
	}
	
	
}


?>