<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListDevicesForWirelessDeviceImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImportedSidewalkDevice|null $Sidewalk
 */
class ImportedWirelessDevice extends Shape
{
    /**
     * @param array{Sidewalk?: ImportedSidewalkDevice|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
