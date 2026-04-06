<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListDevicesForWirelessDeviceImportTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property string|null $DestinationName
 * @property 'Enabled'|'Disabled'|null $Positioning
 * @property Shapes\SidewalkListDevicesForImportInfo|null $Sidewalk
 * @property list<Shapes\ImportedWirelessDevice>|null $ImportedWirelessDeviceList
 */
class ListDevicesForWirelessDeviceImportTaskResponse extends Response
{
}
