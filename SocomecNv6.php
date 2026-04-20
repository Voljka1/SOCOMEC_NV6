<?php

namespace LibreNMS\OS;

use App\Models\Device;
use LibreNMS\OS;

class SocomecNv6 extends OS
{
    public function discoverOS(Device $device): void
    {
	    parent::discoverOS($device); // yaml

        // This uses the engine that respects your YAML mib_dir
		$model = \SnmpQuery::get('SOCOMECUPS6-MIB::upsIdentModel.0')->value();

		if (!empty($model)) {
			$device->features = trim($model);
		}
    }
}