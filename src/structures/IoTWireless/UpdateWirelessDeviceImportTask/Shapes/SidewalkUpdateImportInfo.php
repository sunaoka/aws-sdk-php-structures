<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDeviceImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceCreationFile
 */
class SidewalkUpdateImportInfo extends Shape
{
    /**
     * @param array{DeviceCreationFile?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
