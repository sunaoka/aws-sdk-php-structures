<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDeviceImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceCreationFile
 */
class SidewalkUpdateImportInfo extends Shape
{
    /**
     * @param array{DeviceCreationFile?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
