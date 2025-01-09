<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartWirelessDeviceImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceCreationFile
 * @property string $Role
 */
class SidewalkStartImportInfo extends Shape
{
    /**
     * @param array{
     *     DeviceCreationFile?: string,
     *     Role?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
