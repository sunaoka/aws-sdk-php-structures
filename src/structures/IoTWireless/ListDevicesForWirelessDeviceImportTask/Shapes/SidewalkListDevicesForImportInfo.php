<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListDevicesForWirelessDeviceImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SidewalkPositioning|null $Positioning
 */
class SidewalkListDevicesForImportInfo extends Shape
{
    /**
     * @param array{Positioning?: SidewalkPositioning|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
