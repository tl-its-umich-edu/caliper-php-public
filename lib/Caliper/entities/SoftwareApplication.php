<?php
require_once('CaliperAgent.php');

class SoftwareApplication extends CaliperAgent{

	public function __construct($id) {
        parent::__construct();
		$this->setId($id);
		$this->setType("http://purl.imsglobal.org/caliper/v1/SoftwareApplication");
	}

}