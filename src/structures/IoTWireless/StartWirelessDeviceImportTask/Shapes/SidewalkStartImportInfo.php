<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartWirelessDeviceImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceCreationFile
 * @property string|null $Role
 */
class SidewalkStartImportInfo extends Shape
{
    /**
     * @param array{
     *     DeviceCreationFile?: string|null,
     *     Role?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
